<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Agreements;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Agreement;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Agreements\AcceptancesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Agreements\FileRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Agreements\FilesRequestBuilder;

/**
 * Request builder for /agreements/{agreement-id}
 */
class AgreementRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get entity from agreements by key
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @return Agreement|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null): Agreement|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Agreement|null
     */
    private function deserializeGet(string $body): Agreement|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Agreement($data);
    }
    /**
     * Update entity in agreements
     * @param Agreement $body Request body
     * @return Agreement|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Agreement $body): Agreement|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Agreement|null
     */
    private function deserializePatch(string $body): Agreement|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Agreement($data);
    }
    /**
     * Delete entity from agreements
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
     * Navigate to acceptances
     *
     * @return AcceptancesRequestBuilder
     */
    public function acceptances(): AcceptancesRequestBuilder
    {
        return new AcceptancesRequestBuilder($this->client, $this->requestUrl . '/acceptances');
    }
    /**
     * Navigate to file
     *
     * @return FileRequestBuilder
     */
    public function file(): FileRequestBuilder
    {
        return new FileRequestBuilder($this->client, $this->requestUrl . '/file');
    }
    /**
     * Navigate to files
     *
     * @return FilesRequestBuilder
     */
    public function files(): FilesRequestBuilder
    {
        return new FilesRequestBuilder($this->client, $this->requestUrl . '/files');
    }
}
