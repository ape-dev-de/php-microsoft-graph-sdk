<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookTable;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\ColumnsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\ClearFiltersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\ConvertToRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\DataBodyRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\HeaderRowRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\RangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\ReapplyFiltersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\TotalRowRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\RowsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\SortRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Tables\WorksheetRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/tables/itemAt(index={index})
 */
class ItemAtRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function itemAt
     * @return WorkbookTable|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): WorkbookTable|\stdClass
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to WorkbookTable|\stdClass
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
