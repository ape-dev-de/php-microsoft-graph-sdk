<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityReportsRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Security\GetAttackSimulationRepeatOffendersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Security\GetAttackSimulationSimulationUserCoverageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Security\GetAttackSimulationTrainingUserCoverageRequestBuilder;

/**
 * Request builder for /reports/security
 */
class SecurityRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get security from reports
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityReportsRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityReportsRoot
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
     * Deserialize response to SecurityReportsRoot
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
        return new SecurityReportsRoot($data);
    }
    /**
     * Update the navigation property security in reports
     * @param SecurityReportsRoot $body Request body
     * @return SecurityReportsRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityReportsRoot $body): SecurityReportsRoot
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityReportsRoot
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
        return new SecurityReportsRoot($data);
    }
    /**
     * Delete navigation property security for reports
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
     * Navigate to getAttackSimulationRepeatOffenders()
     *
     * @return GetAttackSimulationRepeatOffendersRequestBuilder
     */
    public function getAttackSimulationRepeatOffenders(): GetAttackSimulationRepeatOffendersRequestBuilder
    {
        return new GetAttackSimulationRepeatOffendersRequestBuilder($this->client, $this->requestUrl . '/getAttackSimulationRepeatOffenders()');
    }
    /**
     * Navigate to getAttackSimulationSimulationUserCoverage()
     *
     * @return GetAttackSimulationSimulationUserCoverageRequestBuilder
     */
    public function getAttackSimulationSimulationUserCoverage(): GetAttackSimulationSimulationUserCoverageRequestBuilder
    {
        return new GetAttackSimulationSimulationUserCoverageRequestBuilder($this->client, $this->requestUrl . '/getAttackSimulationSimulationUserCoverage()');
    }
    /**
     * Navigate to getAttackSimulationTrainingUserCoverage()
     *
     * @return GetAttackSimulationTrainingUserCoverageRequestBuilder
     */
    public function getAttackSimulationTrainingUserCoverage(): GetAttackSimulationTrainingUserCoverageRequestBuilder
    {
        return new GetAttackSimulationTrainingUserCoverageRequestBuilder($this->client, $this->requestUrl . '/getAttackSimulationTrainingUserCoverage()');
    }
}
