<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing\Usage;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PartnersBillingUnbilledUsage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\Partners\Billing\Usage\Unbilled\PartnersBillingExportRequestBuilder;

/**
 * Request builder for /reports/partners/billing/usage/unbilled
 */
class UnbilledRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get unbilled from reports
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PartnersBillingUnbilledUsage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PartnersBillingUnbilledUsage|null
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
     * Deserialize response to PartnersBillingUnbilledUsage|null
     */
    private function deserializeGet(string $body): PartnersBillingUnbilledUsage|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PartnersBillingUnbilledUsage($data);
    }
    /**
     * Update the navigation property unbilled in reports
     * @param PartnersBillingUnbilledUsage $body Request body
     * @return PartnersBillingUnbilledUsage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PartnersBillingUnbilledUsage $body): PartnersBillingUnbilledUsage|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PartnersBillingUnbilledUsage|null
     */
    private function deserializePatch(string $body): PartnersBillingUnbilledUsage|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new PartnersBillingUnbilledUsage($data);
    }
    /**
     * Delete navigation property unbilled for reports
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
     * Navigate to microsoft.graph.partners.billing.export
     *
     * @return PartnersBillingExportRequestBuilder
     */
    public function partnersBillingExport(): PartnersBillingExportRequestBuilder
    {
        return new PartnersBillingExportRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.partners.billing.export');
    }
}
