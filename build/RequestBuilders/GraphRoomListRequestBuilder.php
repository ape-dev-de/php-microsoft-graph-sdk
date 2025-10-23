<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RoomList;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RoomsRequestBuilder;

/**
 * Request builder for graph.roomList
 */
class GraphRoomListRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.place as microsoft.graph.roomList
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return RoomList
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): RoomList
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to RoomList
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new RoomList($data);
    }
    /**
     * Navigate to rooms
     *
     * @return RoomsRequestBuilder
     */
    public function rooms(): RoomsRequestBuilder
    {
        return new RoomsRequestBuilder($this->client, $this->requestUrl . '/rooms');
    }
}
