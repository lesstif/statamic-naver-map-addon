<?php

namespace Statamic\Addons\NaverMaps;

use Statamic\Extend\Tags;

class NaverMapsTags extends Tags
{
    /**
     * The {{ naver_maps }} tag
     *
     * @return string|array
     */
    public function index()
    {
        $client_id = $this->getConfig('client_id', 'CLIENT_ID');

        $zoom = $this->getParamInt('zoom', 10);
        $address = $this->getParam('address', '도화동 51-1');
        $height = $this->getParam('height', '300px');
        $width = $this->getParam('width', '100%');
        $markers = array_filter(
            explode(';', $this->getParam('markers'))
        );

        $map_div = 'map';

        if ($client_id == 'CLIENT_ID') {
            Log::error("NaverMapsAddon: No client id specified");
        }

        return $this->view('partials.map',
            compact('client_id', 'zoom', 'address', 'height', 'width', 'map_div', 'markers')
        );
    }

    /**
     * The {{ naver_maps:example }} tag
     *
     * @return string|array
     */
    public function example()
    {
        //
    }
}
