<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Places;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Places\Places\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Places\Places\GraphRoomRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Places\Places\GraphRoomListRequestBuilder;

/**
 * Request builder for /places
 */
class PlacesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
    /**
     * Navigate to graph.room
     *
     * @return GraphRoomRequestBuilder
     */
    public function graphRoom(): GraphRoomRequestBuilder
    {
        return new GraphRoomRequestBuilder($this->client, $this->requestUrl . '/graph.room');
    }
    /**
     * Navigate to graph.roomList
     *
     * @return GraphRoomListRequestBuilder
     */
    public function graphRoomList(): GraphRoomListRequestBuilder
    {
        return new GraphRoomListRequestBuilder($this->client, $this->requestUrl . '/graph.roomList');
    }
}
