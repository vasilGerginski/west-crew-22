<?php

namespace App\Livewire;

use Livewire\Component;

class MusicPlayer extends Component
{
    public $tracks = [
        [
            'id' => 1,
            'title' => 'The Light × Stefo - Drilla Killa',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=SXOLB1hbEGo'
        ],
        [
            'id' => 2,
            'title' => 'Eazy- Деградация (Official Video)',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=6Ii0YFFNIIU'
        ],
        [
            'id' => 3,
            'title' => 'Psihopata- Чук Чук',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=ZRoodAOI-lw'
        ],
        [
            'id' => 4,
            'title' => 'The Light- Bitches love me',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=68KHVgbdy8s'
        ],
        [
            'id' => 5,
            'title' => 'Eazy - S Cigara Na Golqmoto',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=UDDmcu1rDEo'
        ],
        [
            'id' => 6,
            'title' => 'Eazy- Един Миг',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=H7suyntY8JU'
        ],
        [
            'id' => 7,
            'title' => 'Eazy× Stefo× The Light- Anti System',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=zMZFSUdSiPc'
        ],
        [
            'id' => 8,
            'title' => 'Eazy- Музикална епопея',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=x52YoXynUqY'
        ],
        [
            'id' => 9,
            'title' => 'Eazy- Независима медия',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=ltFByOrWc8M'
        ],
        [
            'id' => 10,
            'title' => 'Eazy× The Light- Антиутопия',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=UuOYGEX6zMo'
        ],
        [
            'id' => 11,
            'title' => 'Eazy- В Махлата да гори',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=JUBSEDcc4m0'
        ],
        [
            'id' => 12,
            'title' => 'Eazy× Psihopata- Зависим',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=7XArV41-LfI'
        ],
        [
            'id' => 13,
            'title' => 'Eazy- Намирам Бог преди той да намери мен',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=tSO_BYRBV4g'
        ],
        [
            'id' => 14,
            'title' => 'THE LIGHT x EAZY - Vseki Vtori (Official Audio)',
            'artist' => 'West Crew 22',
            'url' => 'https://www.youtube.com/watch?v=0EhCRPshAbA'
        ]
    ];

    public $currentTrackIndex = 0;
    public $currentTrack = [];
    
    public function isYouTubeUrl($url)
    {
        return strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false;
    }
    
    public function getYouTubeId($url)
    {
        $pattern = '/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([a-zA-Z0-9_-]+)/';
        preg_match($pattern, $url, $matches);
        return isset($matches[1]) ? $matches[1] : null;
    }

    public function mount()
    {
        $this->currentTrack = $this->tracks[$this->currentTrackIndex];
    }

    public function nextTrack()
    {
        $this->currentTrackIndex = ($this->currentTrackIndex + 1) % count($this->tracks);
        $this->currentTrack = $this->tracks[$this->currentTrackIndex];
    }

    public function previousTrack()
    {
        $this->currentTrackIndex = $this->currentTrackIndex - 1;
        if ($this->currentTrackIndex < 0) {
            $this->currentTrackIndex = count($this->tracks) - 1;
        }
        $this->currentTrack = $this->tracks[$this->currentTrackIndex];
    }

    public function render()
    {
        return view('livewire.music-player');
    }
}
