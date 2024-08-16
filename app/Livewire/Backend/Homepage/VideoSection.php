<?php

namespace App\Livewire\Backend\Homepage;

use App\Models\HomePage;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class VideoSection extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "Banner Section", $homepage;
    public $video_section_heading, $video_section_text, $video_section_image, $video_section_video, $counter_1, $counter_1_text, $counter_2, $counter_2_text, $counter_3, $counter_3_text, $selectId;
    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage()
    {

        if ($this->homepage->video_section_image != null) {
            $this->video_section_image = '';
        }
    }

    public function openImageModal()
    {
        $this->dispatch('open-modal');
    }

    public function selectImage($id)
    {
        $image = Image::find($id);
        $this->selectId = $image->id;
        $this->video_section_image = $image->image;
    }


    public function mount()
    {
        $homepage = HomePage::where('id', 1)->first();
        $this->homepage = $homepage;
        $this->video_section_heading = $homepage->video_section_heading;
        $this->video_section_text = $homepage->video_section_text;
        $this->video_section_video = $homepage->video_section_video;
        $this->counter_1 = $homepage->counter_1;
        $this->counter_1_text = $homepage->counter_1_text;
        $this->counter_2 = $homepage->counter_2;
        $this->counter_2_text = $homepage->counter_2_text;
        $this->counter_3 = $homepage->counter_3;
        $this->counter_3_text = $homepage->counter_3_text;

    }

    public function save()
    {
        $homepage = HomePage::where('id', 1)->first();

        if ($this->video_section_image) {
            $image_name = $this->video_section_image;
        } else {
            $image_name = $homepage->video_section_image;
        }

        $homepage->update([
            'video_section_heading' => $this->video_section_heading,
            'video_section_text' => $this->video_section_text,
            'video_section_image' => $image_name,
            'video_section_video' => $this->video_section_video,
            'counter_1' => $this->counter_1,
            'counter_1_text' => $this->counter_1_text,
            'counter_2' => $this->counter_2,
            'counter_2_text' => $this->counter_2_text,
            'counter_3' => $this->counter_3,
            'counter_3_text' => $this->counter_3_text,
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' => $this->page.' has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.homepage.video-section', [
            'images' => Image::orderBy('id', 'DESC')->paginate(12),
        ]);
    }

}
