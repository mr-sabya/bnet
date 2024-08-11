<?php

namespace App\Livewire\Backend\Setting;

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $page = "Setting", $setting, $uploadLogo = false, $uploadwhiteLogo = false, $uploadFavicon = false;
    public $site_title, $tagline, $logo, $white_logo, $favicon, $address, $email, $phone, $opening_time, $facebook, $twitter, $instagram, $linkedin;



    /**
     * Active image upload and preview
     * @return void
     */
    public function activeImageUpload($image)
    {
        if ($image == 'logo') {
            $this->uploadLogo = true;
        } elseif ($image == 'whitelogo') {
            $this->uploadwhiteLogo = true;
        } elseif ($image == 'favicon') {
            $this->uploadFavicon = true;
        }
    }
    /**
     * reset image upload and preview
     * @return void
     */
    public function resetImage($image)
    {
        if ($image == 'logo') {
            $this->uploadLogo = false;
        } elseif ($image == 'whitelogo') {
            $this->uploadwhiteLogo = false;
        } elseif ($image == 'favicon') {
            $this->uploadFavicon = false;
        }
    }


    public function mount()
    {
        $setting = Setting::where('id', 1)->first();
        $this->setting = $setting;
        $this->site_title = $setting->site_title;
        $this->tagline = $setting->tagline;
        $this->address = $setting->address;
        $this->email = $setting->email;
        $this->phone = $setting->phone;
        $this->opening_time = $setting->opening_time;
        $this->facebook = $setting->facebook;
        $this->twitter = $setting->twitter;
        $this->instagram = $setting->instagram;
        $this->linkedin = $setting->linkedin;
    }

    public function save()
    {
        $setting = Setting::where('id', 1)->first();


        if ($this->logo) {
            Storage::delete($setting->logo);
            $image_name = $this->logo->getClientOriginalName();
            $image_url = "public/site";
            $this->logo->storeAs($image_url, $image_name);
            $logo_name = $image_url . '/' . $image_name;
        } else {
            $logo_name = $setting->logo;
        }


        if ($this->white_logo) {
            $image_name = md5($this->white_logo . microtime()) . '.' . $this->white_logo->extension();
            $image_url = "public/site";
            $this->white_logo->storeAs($image_url, $image_name);
            $white_logo_name = $image_url . '/' . $image_name;
        } else {
            $white_logo_name = $setting->white_logo;
        }

        if ($this->favicon) {
            $image_name = md5($this->favicon . microtime()) . '.' . $this->favicon->extension();
            $image_url = "public/site";
            $this->favicon->storeAs($image_url, $image_name);
            $favicon_name = $image_url . '/' . $image_name;
        } else {
            $favicon_name = $setting->favicon;
        }

        $setting->update([
            'site_title' => $this->site_title,
            'tagline' => $this->tagline,
            'logo' => $logo_name,
            'white_logo' => $white_logo_name,
            'favicon' => $favicon_name,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'opening_time' => $this->opening_time,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' =>'Setting has been updated successfully!']);
    }

    public function render()
    {
        return view('livewire.backend.setting.index');
    }
}
