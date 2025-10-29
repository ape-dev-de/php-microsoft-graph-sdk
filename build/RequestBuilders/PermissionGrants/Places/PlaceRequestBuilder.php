<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrants\Places;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Place;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrants\Places\GraphRoomRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrants\Places\GraphRoomListRequestBuilder;

/**
 * Request builder for /places/{place-id}
 */
class PlaceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Update place
     * @param Place $body Request body
     * @return Place
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Place $body): Place
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Place
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Place($data);
    }
    /**
     * Delete entity from places
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
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
