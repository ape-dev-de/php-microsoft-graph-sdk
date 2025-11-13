<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CustomAuthenticationExtensionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\CustomAuthenticationExtension;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\CustomAuthenticationExtensions\CustomAuthenticationExtensionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\CustomAuthenticationExtensions\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\CustomAuthenticationExtensions\ValidateAuthenticationConfigurationRequestBuilder;

/**
 * Request builder for /identity/customAuthenticationExtensions
 */
class CustomAuthenticationExtensionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List customAuthenticationExtensions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return CustomAuthenticationExtensionCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): CustomAuthenticationExtensionCollectionResponse|null
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
     * Deserialize response to CustomAuthenticationExtensionCollectionResponse|null
     */
    private function deserializeGet(string $body): CustomAuthenticationExtensionCollectionResponse|null    {
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
            $items[] = new CustomAuthenticationExtension($item);
        }
        $collection = new CustomAuthenticationExtensionCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create customAuthenticationExtension
     * @param CustomAuthenticationExtension $body Request body
     * @return CustomAuthenticationExtension|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(CustomAuthenticationExtension $body): CustomAuthenticationExtension|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to CustomAuthenticationExtension|null
     */
    private function deserializePost(string $body): CustomAuthenticationExtension|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CustomAuthenticationExtension($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $customAuthenticationExtensionId The item ID
     * @return CustomAuthenticationExtensionRequestBuilder
     */
    public function byId(string $customAuthenticationExtensionId): CustomAuthenticationExtensionRequestBuilder
    {
        return new CustomAuthenticationExtensionRequestBuilder($this->client, $this->requestUrl . '/' . $customAuthenticationExtensionId);
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
     * Navigate to validateAuthenticationConfiguration
     *
     * @return ValidateAuthenticationConfigurationRequestBuilder
     */
    public function validateAuthenticationConfiguration(): ValidateAuthenticationConfigurationRequestBuilder
    {
        return new ValidateAuthenticationConfigurationRequestBuilder($this->client, $this->requestUrl . '/validateAuthenticationConfiguration');
    }
}
