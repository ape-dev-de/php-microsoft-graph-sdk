<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityEdiscoveryCase;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\CustodiansRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\SecurityCloseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\SecurityReopenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\NoncustodialDataSourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\ReviewSetsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\SearchesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\SettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\TagsRequestBuilder;

/**
 * Request builder for /security/cases/ediscoveryCases/{ediscoveryCase-id}
 */
class EdiscoveryCaseRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get ediscoveryCase
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityEdiscoveryCase
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityEdiscoveryCase
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
     * Deserialize response to SecurityEdiscoveryCase
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
        return new SecurityEdiscoveryCase($data);
    }
    /**
     * Update ediscoveryCase
     * @param SecurityEdiscoveryCase $body Request body
     * @return SecurityEdiscoveryCase
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityEdiscoveryCase $body): SecurityEdiscoveryCase
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityEdiscoveryCase
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
        return new SecurityEdiscoveryCase($data);
    }
    /**
     * Delete ediscoveryCase
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
     * Navigate to custodians
     *
     * @return CustodiansRequestBuilder
     */
    public function custodians(): CustodiansRequestBuilder
    {
        return new CustodiansRequestBuilder($this->client, $this->requestUrl . '/custodians');
    }
    /**
     * Navigate to microsoft.graph.security.close
     *
     * @return SecurityCloseRequestBuilder
     */
    public function securityClose(): SecurityCloseRequestBuilder
    {
        return new SecurityCloseRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.close');
    }
    /**
     * Navigate to microsoft.graph.security.reopen
     *
     * @return SecurityReopenRequestBuilder
     */
    public function securityReopen(): SecurityReopenRequestBuilder
    {
        return new SecurityReopenRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.reopen');
    }
    /**
     * Navigate to noncustodialDataSources
     *
     * @return NoncustodialDataSourcesRequestBuilder
     */
    public function noncustodialDataSources(): NoncustodialDataSourcesRequestBuilder
    {
        return new NoncustodialDataSourcesRequestBuilder($this->client, $this->requestUrl . '/noncustodialDataSources');
    }
    /**
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
    /**
     * Navigate to reviewSets
     *
     * @return ReviewSetsRequestBuilder
     */
    public function reviewSets(): ReviewSetsRequestBuilder
    {
        return new ReviewSetsRequestBuilder($this->client, $this->requestUrl . '/reviewSets');
    }
    /**
     * Navigate to searches
     *
     * @return SearchesRequestBuilder
     */
    public function searches(): SearchesRequestBuilder
    {
        return new SearchesRequestBuilder($this->client, $this->requestUrl . '/searches');
    }
    /**
     * Navigate to settings
     *
     * @return SettingsRequestBuilder
     */
    public function settings(): SettingsRequestBuilder
    {
        return new SettingsRequestBuilder($this->client, $this->requestUrl . '/settings');
    }
    /**
     * Navigate to tags
     *
     * @return TagsRequestBuilder
     */
    public function tags(): TagsRequestBuilder
    {
        return new TagsRequestBuilder($this->client, $this->requestUrl . '/tags');
    }
}
