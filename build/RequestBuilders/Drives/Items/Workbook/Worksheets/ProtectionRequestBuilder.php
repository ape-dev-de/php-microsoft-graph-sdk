<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookWorksheetProtection;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Protection\ProtectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Worksheets\Protection\UnprotectRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/{workbookWorksheet-id}/protection
 */
class ProtectionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get protection from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkbookWorksheetProtection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkbookWorksheetProtection|null
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
     * Deserialize response to WorkbookWorksheetProtection|null
     */
    private function deserializeGet(string $body): WorkbookWorksheetProtection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookWorksheetProtection($data);
    }
    /**
     * Update the navigation property protection in drives
     * @param WorkbookWorksheetProtection $body Request body
     * @return WorkbookWorksheetProtection|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkbookWorksheetProtection $body): WorkbookWorksheetProtection|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkbookWorksheetProtection|null
     */
    private function deserializePatch(string $body): WorkbookWorksheetProtection|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookWorksheetProtection($data);
    }
    /**
     * Delete navigation property protection for drives
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
     * Navigate to protect
     *
     * @return ProtectRequestBuilder
     */
    public function protect(): ProtectRequestBuilder
    {
        return new ProtectRequestBuilder($this->client, $this->requestUrl . '/protect');
    }
    /**
     * Navigate to unprotect
     *
     * @return UnprotectRequestBuilder
     */
    public function unprotect(): UnprotectRequestBuilder
    {
        return new UnprotectRequestBuilder($this->client, $this->requestUrl . '/unprotect');
    }
}
