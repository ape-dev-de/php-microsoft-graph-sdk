<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PartnersBillingAzureUsage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing\Usage\BilledRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing\Usage\UnbilledRequestBuilder;

/**
 * Request builder for /reports/partners/billing/usage
 */
class UsageRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get usage from reports
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PartnersBillingAzureUsage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PartnersBillingAzureUsage
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
     * Deserialize response to PartnersBillingAzureUsage
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
        return new PartnersBillingAzureUsage($data);
    }
    /**
     * Update the navigation property usage in reports
     * @param PartnersBillingAzureUsage $body Request body
     * @return PartnersBillingAzureUsage
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PartnersBillingAzureUsage $body): PartnersBillingAzureUsage
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PartnersBillingAzureUsage
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
        return new PartnersBillingAzureUsage($data);
    }
    /**
     * Delete navigation property usage for reports
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
     * Navigate to billed
     *
     * @return BilledRequestBuilder
     */
    public function billed(): BilledRequestBuilder
    {
        return new BilledRequestBuilder($this->client, $this->requestUrl . '/billed');
    }
    /**
     * Navigate to unbilled
     *
     * @return UnbilledRequestBuilder
     */
    public function unbilled(): UnbilledRequestBuilder
    {
        return new UnbilledRequestBuilder($this->client, $this->requestUrl . '/unbilled');
    }
}
