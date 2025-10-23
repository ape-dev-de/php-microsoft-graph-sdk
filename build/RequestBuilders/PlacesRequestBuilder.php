<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphRoomRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GraphRoomListRequestBuilder;

/**
 * Request builder for places
 */
class PlacesRequestBuilder extends BaseRequestBuilder
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
