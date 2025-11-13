<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PartnersBillingBilling;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing\ManifestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing\ReconciliationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing\UsageRequestBuilder;

/**
 * Request builder for /reports/partners/billing
 */
class BillingRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get billing from reports
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PartnersBillingBilling|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PartnersBillingBilling|null
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
     * Deserialize response to PartnersBillingBilling|null
     */
    private function deserializeGet(string $body): PartnersBillingBilling|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PartnersBillingBilling($data);
    }
    /**
     * Update the navigation property billing in reports
     * @param PartnersBillingBilling $body Request body
     * @return PartnersBillingBilling|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PartnersBillingBilling $body): PartnersBillingBilling|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PartnersBillingBilling|null
     */
    private function deserializePatch(string $body): PartnersBillingBilling|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PartnersBillingBilling($data);
    }
    /**
     * Delete navigation property billing for reports
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
     * Navigate to manifests
     *
     * @return ManifestsRequestBuilder
     */
    public function manifests(): ManifestsRequestBuilder
    {
        return new ManifestsRequestBuilder($this->client, $this->requestUrl . '/manifests');
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
     * Navigate to reconciliation
     *
     * @return ReconciliationRequestBuilder
     */
    public function reconciliation(): ReconciliationRequestBuilder
    {
        return new ReconciliationRequestBuilder($this->client, $this->requestUrl . '/reconciliation');
    }
    /**
     * Navigate to usage
     *
     * @return UsageRequestBuilder
     */
    public function usage(): UsageRequestBuilder
    {
        return new UsageRequestBuilder($this->client, $this->requestUrl . '/usage');
    }
}
