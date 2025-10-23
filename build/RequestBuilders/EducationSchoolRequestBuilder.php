<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationSchool;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AdministrativeUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ClassesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UsersRequestBuilder;

/**
 * Request builder for {educationSchool-id}
 */
class EducationSchoolRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get educationSchool
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return EducationSchool
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): EducationSchool
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to EducationSchool
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
        return new EducationSchool($data);
    }
    /**
     * Update educationSchool
     * @param EducationSchool $body Request body
     * @return EducationSchool
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EducationSchool $body): EducationSchool
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EducationSchool
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
        return new EducationSchool($data);
    }
    /**
     * Delete educationSchool
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
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
     * Navigate to administrativeUnit
     *
     * @return AdministrativeUnitRequestBuilder
     */
    public function administrativeUnit(): AdministrativeUnitRequestBuilder
    {
        return new AdministrativeUnitRequestBuilder($this->client, $this->requestUrl . '/administrativeUnit');
    }
    /**
     * Navigate to classes
     *
     * @return ClassesRequestBuilder
     */
    public function classes(): ClassesRequestBuilder
    {
        return new ClassesRequestBuilder($this->client, $this->requestUrl . '/classes');
    }
    /**
     * Navigate to users
     *
     * @return UsersRequestBuilder
     */
    public function users(): UsersRequestBuilder
    {
        return new UsersRequestBuilder($this->client, $this->requestUrl . '/users');
    }
}
