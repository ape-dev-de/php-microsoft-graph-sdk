<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationUser;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\ClassesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\RubricsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\SchoolsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\TaughtClassesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Users\UserRequestBuilder;

/**
 * Request builder for /education/users/{educationUser-id}
 */
class EducationUserRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get educationUser
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return EducationUser
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): EducationUser
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
     * Deserialize response to EducationUser
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
        return new EducationUser($data);
    }
    /**
     * Update educationUser
     * @param EducationUser $body Request body
     * @return EducationUser
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EducationUser $body): EducationUser
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EducationUser
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
        return new EducationUser($data);
    }
    /**
     * Delete educationUser
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
     * Navigate to assignments
     *
     * @return AssignmentsRequestBuilder
     */
    public function assignments(): AssignmentsRequestBuilder
    {
        return new AssignmentsRequestBuilder($this->client, $this->requestUrl . '/assignments');
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
     * Navigate to rubrics
     *
     * @return RubricsRequestBuilder
     */
    public function rubrics(): RubricsRequestBuilder
    {
        return new RubricsRequestBuilder($this->client, $this->requestUrl . '/rubrics');
    }
    /**
     * Navigate to schools
     *
     * @return SchoolsRequestBuilder
     */
    public function schools(): SchoolsRequestBuilder
    {
        return new SchoolsRequestBuilder($this->client, $this->requestUrl . '/schools');
    }
    /**
     * Navigate to taughtClasses
     *
     * @return TaughtClassesRequestBuilder
     */
    public function taughtClasses(): TaughtClassesRequestBuilder
    {
        return new TaughtClassesRequestBuilder($this->client, $this->requestUrl . '/taughtClasses');
    }
    /**
     * Navigate to user
     *
     * @return UserRequestBuilder
     */
    public function user(): UserRequestBuilder
    {
        return new UserRequestBuilder($this->client, $this->requestUrl . '/user');
    }
}
