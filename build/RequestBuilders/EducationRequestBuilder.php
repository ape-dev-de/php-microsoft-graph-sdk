<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ClassesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ReportsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SchoolsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UsersRequestBuilder;

/**
 * Request builder for education
 */
class EducationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get education
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return EducationRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): EducationRoot
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
     * Deserialize response to EducationRoot
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
        return new EducationRoot($data);
    }
    /**
     * Update education
     * @param EducationRoot $body Request body
     * @return EducationRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EducationRoot $body): EducationRoot
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EducationRoot
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
        return new EducationRoot($data);
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
     * Navigate to me
     *
     * @return MeRequestBuilder
     */
    public function me(): MeRequestBuilder
    {
        return new MeRequestBuilder($this->client, $this->requestUrl . '/me');
    }
    /**
     * Navigate to reports
     *
     * @return ReportsRequestBuilder
     */
    public function reports(): ReportsRequestBuilder
    {
        return new ReportsRequestBuilder($this->client, $this->requestUrl . '/reports');
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
     * Navigate to users
     *
     * @return UsersRequestBuilder
     */
    public function users(): UsersRequestBuilder
    {
        return new UsersRequestBuilder($this->client, $this->requestUrl . '/users');
    }
}
