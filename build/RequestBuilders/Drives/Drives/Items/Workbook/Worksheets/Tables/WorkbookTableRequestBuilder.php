<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookTable;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\ColumnsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\ClearFiltersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\ConvertToRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\DataBodyRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\HeaderRowRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\RangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\ReapplyFiltersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\TotalRowRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\RowsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\SortRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\WorksheetRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/{workbookWorksheet-id}/tables/{workbookTable-id}
 */
class WorkbookTableRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get tables from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkbookTable
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkbookTable
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
     * Deserialize response to WorkbookTable
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
        return new WorkbookTable($data);
    }
    /**
     * Update the navigation property tables in drives
     * @param WorkbookTable $body Request body
     * @return WorkbookTable
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkbookTable $body): WorkbookTable
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkbookTable
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
        return new WorkbookTable($data);
    }
    /**
     * Delete navigation property tables for drives
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
     * Navigate to columns
     *
     * @return ColumnsRequestBuilder
     */
    public function columns(): ColumnsRequestBuilder
    {
        return new ColumnsRequestBuilder($this->client, $this->requestUrl . '/columns');
    }
    /**
     * Navigate to clearFilters
     *
     * @return ClearFiltersRequestBuilder
     */
    public function clearFilters(): ClearFiltersRequestBuilder
    {
        return new ClearFiltersRequestBuilder($this->client, $this->requestUrl . '/clearFilters');
    }
    /**
     * Navigate to convertToRange
     *
     * @return ConvertToRangeRequestBuilder
     */
    public function convertToRange(): ConvertToRangeRequestBuilder
    {
        return new ConvertToRangeRequestBuilder($this->client, $this->requestUrl . '/convertToRange');
    }
    /**
     * Navigate to dataBodyRange()
     *
     * @return DataBodyRangeRequestBuilder
     */
    public function dataBodyRange(): DataBodyRangeRequestBuilder
    {
        return new DataBodyRangeRequestBuilder($this->client, $this->requestUrl . '/dataBodyRange()');
    }
    /**
     * Navigate to headerRowRange()
     *
     * @return HeaderRowRangeRequestBuilder
     */
    public function headerRowRange(): HeaderRowRangeRequestBuilder
    {
        return new HeaderRowRangeRequestBuilder($this->client, $this->requestUrl . '/headerRowRange()');
    }
    /**
     * Navigate to range()
     *
     * @return RangeRequestBuilder
     */
    public function range(): RangeRequestBuilder
    {
        return new RangeRequestBuilder($this->client, $this->requestUrl . '/range()');
    }
    /**
     * Navigate to reapplyFilters
     *
     * @return ReapplyFiltersRequestBuilder
     */
    public function reapplyFilters(): ReapplyFiltersRequestBuilder
    {
        return new ReapplyFiltersRequestBuilder($this->client, $this->requestUrl . '/reapplyFilters');
    }
    /**
     * Navigate to totalRowRange()
     *
     * @return TotalRowRangeRequestBuilder
     */
    public function totalRowRange(): TotalRowRangeRequestBuilder
    {
        return new TotalRowRangeRequestBuilder($this->client, $this->requestUrl . '/totalRowRange()');
    }
    /**
     * Navigate to rows
     *
     * @return RowsRequestBuilder
     */
    public function rows(): RowsRequestBuilder
    {
        return new RowsRequestBuilder($this->client, $this->requestUrl . '/rows');
    }
    /**
     * Navigate to sort
     *
     * @return SortRequestBuilder
     */
    public function sort(): SortRequestBuilder
    {
        return new SortRequestBuilder($this->client, $this->requestUrl . '/sort');
    }
    /**
     * Navigate to worksheet
     *
     * @return WorksheetRequestBuilder
     */
    public function worksheet(): WorksheetRequestBuilder
    {
        return new WorksheetRequestBuilder($this->client, $this->requestUrl . '/worksheet');
    }
}
