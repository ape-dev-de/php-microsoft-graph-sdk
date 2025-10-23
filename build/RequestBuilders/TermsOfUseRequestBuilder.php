<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TermsOfUseContainer;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AgreementAcceptancesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AgreementsRequestBuilder;

/**
 * Request builder for termsOfUse
 */
class TermsOfUseRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get termsOfUse from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TermsOfUseContainer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TermsOfUseContainer
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to TermsOfUseContainer
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
        return new TermsOfUseContainer($data);
    }
    /**
     * Update the navigation property termsOfUse in identityGovernance
     * @param TermsOfUseContainer $body Request body
     * @return TermsOfUseContainer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TermsOfUseContainer $body): TermsOfUseContainer
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TermsOfUseContainer
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
        return new TermsOfUseContainer($data);
    }
    /**
     * Delete navigation property termsOfUse for identityGovernance
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
     * Navigate to agreementAcceptances
     *
     * @return AgreementAcceptancesRequestBuilder
     */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder
    {
        return new AgreementAcceptancesRequestBuilder($this->client, $this->requestUrl . '/agreementAcceptances');
    }
    /**
     * Navigate to agreements
     *
     * @return AgreementsRequestBuilder
     */
    public function agreements(): AgreementsRequestBuilder
    {
        return new AgreementsRequestBuilder($this->client, $this->requestUrl . '/agreements');
    }
}
