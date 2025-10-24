<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SolutionsRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BackupRestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BookingBusinessesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\BookingCurrenciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\Solutions\VirtualEventsRequestBuilder;

/**
 * Request builder for /solutions
 */
class SolutionsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get solutions
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SolutionsRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SolutionsRoot
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
     * Deserialize response to SolutionsRoot
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
        return new SolutionsRoot($data);
    }
    /**
     * Update solutions
     * @param SolutionsRoot $body Request body
     * @return SolutionsRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SolutionsRoot $body): SolutionsRoot
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SolutionsRoot
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
        return new SolutionsRoot($data);
    }
    /**
     * Navigate to backupRestore
     *
     * @return BackupRestoreRequestBuilder
     */
    public function backupRestore(): BackupRestoreRequestBuilder
    {
        return new BackupRestoreRequestBuilder($this->client, $this->requestUrl . '/backupRestore');
    }
    /**
     * Navigate to bookingBusinesses
     *
     * @return BookingBusinessesRequestBuilder
     */
    public function bookingBusinesses(): BookingBusinessesRequestBuilder
    {
        return new BookingBusinessesRequestBuilder($this->client, $this->requestUrl . '/bookingBusinesses');
    }
    /**
     * Navigate to bookingCurrencies
     *
     * @return BookingCurrenciesRequestBuilder
     */
    public function bookingCurrencies(): BookingCurrenciesRequestBuilder
    {
        return new BookingCurrenciesRequestBuilder($this->client, $this->requestUrl . '/bookingCurrencies');
    }
    /**
     * Navigate to virtualEvents
     *
     * @return VirtualEventsRequestBuilder
     */
    public function virtualEvents(): VirtualEventsRequestBuilder
    {
        return new VirtualEventsRequestBuilder($this->client, $this->requestUrl . '/virtualEvents');
    }
}
