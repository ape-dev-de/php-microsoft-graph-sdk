<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityEdiscoverySearch;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches\AdditionalSourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches\AddToReviewSetOperationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches\CustodianSourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches\LastEstimateStatisticsOperationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches\SecurityEstimateStatisticsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches\SecurityExportReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches\SecurityExportResultRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches\SecurityPurgeDataRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Searches\NoncustodialSourcesRequestBuilder;

/**
 * Request builder for /security/cases/ediscoveryCases/{ediscoveryCase-id}/searches/{ediscoverySearch-id}
 */
class EdiscoverySearchRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get ediscoverySearch
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityEdiscoverySearch
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityEdiscoverySearch
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
     * Deserialize response to SecurityEdiscoverySearch
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
        return new SecurityEdiscoverySearch($data);
    }
    /**
     * Update ediscoverySearch
     * @param SecurityEdiscoverySearch $body Request body
     * @return SecurityEdiscoverySearch
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityEdiscoverySearch $body): SecurityEdiscoverySearch
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityEdiscoverySearch
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
        return new SecurityEdiscoverySearch($data);
    }
    /**
     * Delete ediscoverySearch
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
     * Navigate to additionalSources
     *
     * @return AdditionalSourcesRequestBuilder
     */
    public function additionalSources(): AdditionalSourcesRequestBuilder
    {
        return new AdditionalSourcesRequestBuilder($this->client, $this->requestUrl . '/additionalSources');
    }
    /**
     * Navigate to addToReviewSetOperation
     *
     * @return AddToReviewSetOperationRequestBuilder
     */
    public function addToReviewSetOperation(): AddToReviewSetOperationRequestBuilder
    {
        return new AddToReviewSetOperationRequestBuilder($this->client, $this->requestUrl . '/addToReviewSetOperation');
    }
    /**
     * Navigate to custodianSources
     *
     * @return CustodianSourcesRequestBuilder
     */
    public function custodianSources(): CustodianSourcesRequestBuilder
    {
        return new CustodianSourcesRequestBuilder($this->client, $this->requestUrl . '/custodianSources');
    }
    /**
     * Navigate to lastEstimateStatisticsOperation
     *
     * @return LastEstimateStatisticsOperationRequestBuilder
     */
    public function lastEstimateStatisticsOperation(): LastEstimateStatisticsOperationRequestBuilder
    {
        return new LastEstimateStatisticsOperationRequestBuilder($this->client, $this->requestUrl . '/lastEstimateStatisticsOperation');
    }
    /**
     * Navigate to microsoft.graph.security.estimateStatistics
     *
     * @return SecurityEstimateStatisticsRequestBuilder
     */
    public function securityEstimateStatistics(): SecurityEstimateStatisticsRequestBuilder
    {
        return new SecurityEstimateStatisticsRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.estimateStatistics');
    }
    /**
     * Navigate to microsoft.graph.security.exportReport
     *
     * @return SecurityExportReportRequestBuilder
     */
    public function securityExportReport(): SecurityExportReportRequestBuilder
    {
        return new SecurityExportReportRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.exportReport');
    }
    /**
     * Navigate to microsoft.graph.security.exportResult
     *
     * @return SecurityExportResultRequestBuilder
     */
    public function securityExportResult(): SecurityExportResultRequestBuilder
    {
        return new SecurityExportResultRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.exportResult');
    }
    /**
     * Navigate to microsoft.graph.security.purgeData
     *
     * @return SecurityPurgeDataRequestBuilder
     */
    public function securityPurgeData(): SecurityPurgeDataRequestBuilder
    {
        return new SecurityPurgeDataRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.purgeData');
    }
    /**
     * Navigate to noncustodialSources
     *
     * @return NoncustodialSourcesRequestBuilder
     */
    public function noncustodialSources(): NoncustodialSourcesRequestBuilder
    {
        return new NoncustodialSourcesRequestBuilder($this->client, $this->requestUrl . '/noncustodialSources');
    }
}
