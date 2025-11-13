<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedAppRegistrationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedAppRegistration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\ManagedAppRegistrations\ManagedAppRegistrationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\ManagedAppRegistrations\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\ManagedAppRegistrations\GetUserIdsWithFlaggedAppRegistrationRequestBuilder;

/**
 * Request builder for /deviceAppManagement/managedAppRegistrations
 */
class ManagedAppRegistrationsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List iosManagedAppRegistrations
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ManagedAppRegistrationCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ManagedAppRegistrationCollectionResponse|null
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
     * Deserialize response to ManagedAppRegistrationCollectionResponse|null
     */
    private function deserializeGet(string $body): ManagedAppRegistrationCollectionResponse|null    {
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
            $items[] = new ManagedAppRegistration($item);
        }
        $collection = new ManagedAppRegistrationCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create androidManagedAppRegistration
     * @param ManagedAppRegistration $body Request body
     * @return ManagedAppRegistration|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ManagedAppRegistration $body): ManagedAppRegistration|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ManagedAppRegistration|null
     */
    private function deserializePost(string $body): ManagedAppRegistration|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ManagedAppRegistration($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $managedAppRegistrationId The item ID
     * @return ManagedAppRegistrationRequestBuilder
     */
    public function byId(string $managedAppRegistrationId): ManagedAppRegistrationRequestBuilder
    {
        return new ManagedAppRegistrationRequestBuilder($this->client, $this->requestUrl . '/' . $managedAppRegistrationId);
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
     * Navigate to getUserIdsWithFlaggedAppRegistration()
     *
     * @return GetUserIdsWithFlaggedAppRegistrationRequestBuilder
     */
    public function getUserIdsWithFlaggedAppRegistration(): GetUserIdsWithFlaggedAppRegistrationRequestBuilder
    {
        return new GetUserIdsWithFlaggedAppRegistrationRequestBuilder($this->client, $this->requestUrl . '/getUserIdsWithFlaggedAppRegistration()');
    }
}
