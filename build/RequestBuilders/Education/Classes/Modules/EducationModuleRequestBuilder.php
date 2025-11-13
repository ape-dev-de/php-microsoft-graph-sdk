<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Modules;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationModule;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Modules\PinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Modules\PublishRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Modules\SetUpResourcesFolderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Modules\UnpinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Classes\Modules\ResourcesRequestBuilder;

/**
 * Request builder for /education/classes/{educationClass-id}/modules/{educationModule-id}
 */
class EducationModuleRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get educationModule
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return EducationModule|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): EducationModule|null
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
     * Deserialize response to EducationModule|null
     */
    private function deserializeGet(string $body): EducationModule|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationModule($data);
    }
    /**
     * Update educationModule
     * @param EducationModule $body Request body
     * @return EducationModule|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EducationModule $body): EducationModule|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EducationModule|null
     */
    private function deserializePatch(string $body): EducationModule|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationModule($data);
    }
    /**
     * Delete educationModule
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
     * Navigate to pin
     *
     * @return PinRequestBuilder
     */
    public function pin(): PinRequestBuilder
    {
        return new PinRequestBuilder($this->client, $this->requestUrl . '/pin');
    }
    /**
     * Navigate to publish
     *
     * @return PublishRequestBuilder
     */
    public function publish(): PublishRequestBuilder
    {
        return new PublishRequestBuilder($this->client, $this->requestUrl . '/publish');
    }
    /**
     * Navigate to setUpResourcesFolder
     *
     * @return SetUpResourcesFolderRequestBuilder
     */
    public function setUpResourcesFolder(): SetUpResourcesFolderRequestBuilder
    {
        return new SetUpResourcesFolderRequestBuilder($this->client, $this->requestUrl . '/setUpResourcesFolder');
    }
    /**
     * Navigate to unpin
     *
     * @return UnpinRequestBuilder
     */
    public function unpin(): UnpinRequestBuilder
    {
        return new UnpinRequestBuilder($this->client, $this->requestUrl . '/unpin');
    }
    /**
     * Navigate to resources
     *
     * @return ResourcesRequestBuilder
     */
    public function resources(): ResourcesRequestBuilder
    {
        return new ResourcesRequestBuilder($this->client, $this->requestUrl . '/resources');
    }
}
