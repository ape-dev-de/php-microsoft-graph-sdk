<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\CustomSecurityAttributeDefinitions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CustomSecurityAttributeDefinition;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\CustomSecurityAttributeDefinitions\AllowedValuesRequestBuilder;

/**
 * Request builder for /directory/customSecurityAttributeDefinitions/{customSecurityAttributeDefinition-id}
 */
class CustomSecurityAttributeDefinitionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get customSecurityAttributeDefinition
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CustomSecurityAttributeDefinition|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CustomSecurityAttributeDefinition|null
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
     * Deserialize response to CustomSecurityAttributeDefinition|null
     */
    private function deserializeGet(string $body): CustomSecurityAttributeDefinition|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CustomSecurityAttributeDefinition($data);
    }
    /**
     * Update customSecurityAttributeDefinition
     * @param CustomSecurityAttributeDefinition $body Request body
     * @return CustomSecurityAttributeDefinition|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CustomSecurityAttributeDefinition $body): CustomSecurityAttributeDefinition|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CustomSecurityAttributeDefinition|null
     */
    private function deserializePatch(string $body): CustomSecurityAttributeDefinition|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CustomSecurityAttributeDefinition($data);
    }
    /**
     * Delete navigation property customSecurityAttributeDefinitions for directory
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
     * Navigate to allowedValues
     *
     * @return AllowedValuesRequestBuilder
     */
    public function allowedValues(): AllowedValuesRequestBuilder
    {
        return new AllowedValuesRequestBuilder($this->client, $this->requestUrl . '/allowedValues');
    }
}
