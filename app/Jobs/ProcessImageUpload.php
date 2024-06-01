<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProcessImageUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $temporaryPath;
    protected $newImageName;

    /**
     * Create a new job instance.
     *
     * @param string $temporaryPath
     * @param string $newImageName
     * @return void
     */
    public function __construct($temporaryPath, $newImageName)
    {
        $this->temporaryPath = $temporaryPath;
        $this->newImageName = $newImageName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file = Storage::get($this->temporaryPath); // Load the file from the temporary path

        $imgx = Image::make($file);
        $imgx->resize(360, 360, function ($constraint) {
            $constraint->aspectRatio();
        });

        $imagePath = public_path('image-product/' . $this->newImageName);
        $imgx->save($imagePath);
        Storage::delete($this->temporaryPath);
    }
}
