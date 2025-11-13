<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationJobCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationJob;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Jobs\SynchronizationJobRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Jobs\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\Synchronization\Jobs\ValidateCredentialsRequestBuilder;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/synchronization/jobs
 */
class JobsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List synchronization jobs
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return SynchronizationJobCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): SynchronizationJobCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SynchronizationJobCollectionResponse|null
     */
    private function deserializeGet(string $body): SynchronizationJobCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new SynchronizationJob($item);
        }
        $collection = new SynchronizationJobCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create synchronizationJob
     * @param SynchronizationJob $body Request body
     * @return SynchronizationJob|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(SynchronizationJob $body): SynchronizationJob|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to SynchronizationJob|null
     */
    private function deserializePost(string $body): SynchronizationJob|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SynchronizationJob($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $synchronizationJobId The item ID
     * @return SynchronizationJobRequestBuilder
     */
    public function byId(string $synchronizationJobId): SynchronizationJobRequestBuilder
    {
        return new SynchronizationJobRequestBuilder($this->client, $this->requestUrl . '/' . $synchronizationJobId);
    }
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
     * Navigate to validateCredentials
     *
     * @return ValidateCredentialsRequestBuilder
     */
    public function validateCredentials(): ValidateCredentialsRequestBuilder
    {
        return new ValidateCredentialsRequestBuilder($this->client, $this->requestUrl . '/validateCredentials');
    }
}
