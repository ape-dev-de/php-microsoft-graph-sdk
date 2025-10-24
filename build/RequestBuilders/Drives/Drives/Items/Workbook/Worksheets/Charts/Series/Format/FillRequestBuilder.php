<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Charts\Series\Format;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartFill;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Charts\Series\Format\Fill\ClearRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Charts\Series\Format\Fill\SetSolidColorRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/{workbookWorksheet-id}/charts/{workbookChart-id}/series/{workbookChartSeries-id}/format/fill
 */
class FillRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get fill from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkbookChartFill
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkbookChartFill
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
     * Deserialize response to WorkbookChartFill
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
        return new WorkbookChartFill($data);
    }
    /**
     * Update the navigation property fill in drives
     * @param WorkbookChartFill $body Request body
     * @return WorkbookChartFill
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkbookChartFill $body): WorkbookChartFill
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkbookChartFill
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
        return new WorkbookChartFill($data);
    }
    /**
     * Delete navigation property fill for drives
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
     * Navigate to clear
     *
     * @return ClearRequestBuilder
     */
    public function clear(): ClearRequestBuilder
    {
        return new ClearRequestBuilder($this->client, $this->requestUrl . '/clear');
    }
    /**
     * Navigate to setSolidColor
     *
     * @return SetSolidColorRequestBuilder
     */
    public function setSolidColor(): SetSolidColorRequestBuilder
    {
        return new SetSolidColorRequestBuilder($this->client, $this->requestUrl . '/setSolidColor');
    }
}
