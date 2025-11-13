<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrants\Places;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\RoomList;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrants\Places\GraphroomList\RoomsRequestBuilder;

/**
 * Request builder for /places/{place-id}/graph.roomList
 */
class GraphRoomListRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the item of type microsoft.graph.place as microsoft.graph.roomList
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return RoomList|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): RoomList|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to RoomList|null
     */
    private function deserializeGet(string $body): RoomList|null    {
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
