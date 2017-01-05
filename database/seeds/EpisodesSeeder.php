<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use App\Episode;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class EpisodesSeeder extends Seeder
{
    protected $episode;

    public function __construct(Episode $episode)
    {
        $this->episode = $episode;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $episodes = $this->episode->getStoredEpisodes();

        foreach ($episodes as $episode) {
            $fileExtension = '.'.pathinfo($episode)['extension'];
            $stripFileExtension = basename($episode, $fileExtension);
            $readableTitle = substr($stripFileExtension, 0, -12);
            $youTubeUrl = 'https://youtube.com/watch?v='.substr($stripFileExtension, -11);
            $newFileName = Uuid::uuid4().$fileExtension;
            $newFileDescriptor = 'public/'.$newFileName;
            Storage::move($episode, $newFileDescriptor);

            DB::table('episodes')->insert([
                'title' => $readableTitle,
                'url' => $youTubeUrl,
                'file' => 'storage/'.$newFileName,
            ]);

        }
    }
}
