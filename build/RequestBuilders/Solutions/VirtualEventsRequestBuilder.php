<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\VirtualEventsRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\EventsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\TownhallsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\VirtualEvents\WebinarsRequestBuilder;

/**
 * Request builder for /solutions/virtualEvents
 */
class VirtualEventsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get virtualEvents from solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return VirtualEventsRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): VirtualEventsRoot|null
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
     * Deserialize response to VirtualEventsRoot|null
     */
    private function deserializeGet(string $body): VirtualEventsRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new VirtualEventsRoot($data);
    }
    /**
     * Update the navigation property virtualEvents in solutions
     * @param VirtualEventsRoot $body Request body
     * @return VirtualEventsRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(VirtualEventsRoot $body): VirtualEventsRoot|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to VirtualEventsRoot|null
     */
    private function deserializePatch(string $body): VirtualEventsRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new VirtualEventsRoot($data);
    }
    /**
     * Delete navigation property virtualEvents for solutions
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
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to events
     *
     * @return EventsRequestBuilder
     */
    public function events(): EventsRequestBuilder
    {
        return new EventsRequestBuilder($this->client, $this->requestUrl . '/events');
    }
    /**
     * Navigate to townhalls
     *
     * @return TownhallsRequestBuilder
     */
    public function townhalls(): TownhallsRequestBuilder
    {
        return new TownhallsRequestBuilder($this->client, $this->requestUrl . '/townhalls');
    }
    /**
     * Navigate to webinars
     *
     * @return WebinarsRequestBuilder
     */
    public function webinars(): WebinarsRequestBuilder
    {
        return new WebinarsRequestBuilder($this->client, $this->requestUrl . '/webinars');
    }
}
