<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookRange;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\FormatRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\BoundingRectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\CellRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\ClearRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\ColumnRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\ColumnsAfterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\ColumnsBeforeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\DeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\EntireColumnRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\EntireRowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\InsertRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\IntersectionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\LastCellRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\LastColumnRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\LastRowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\MergeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\OffsetRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\ResizedRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\RowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\RowsAboveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\RowsBelowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\UnmergeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\UsedRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\VisibleViewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\SortRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\WorksheetRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/tables/{workbookTable-id}/range()
 */
class RangeRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function range
     * @return WorkbookRange|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): WorkbookRange|\stdClass
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to WorkbookRange|\stdClass
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
        return new WorkbookRange($data);
    }
    /**
     * Navigate to format
     *
     * @return FormatRequestBuilder
     */
    public function format(): FormatRequestBuilder
    {
        return new FormatRequestBuilder($this->client, $this->requestUrl . '/format');
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
     * Navigate to columnsAfter()
     *
     * @return ColumnsAfterRequestBuilder
     */
    public function columnsAfter(): ColumnsAfterRequestBuilder
    {
        return new ColumnsAfterRequestBuilder($this->client, $this->requestUrl . '/columnsAfter()');
    }
    /**
     * Navigate to columnsBefore()
     *
     * @return ColumnsBeforeRequestBuilder
     */
    public function columnsBefore(): ColumnsBeforeRequestBuilder
    {
        return new ColumnsBeforeRequestBuilder($this->client, $this->requestUrl . '/columnsBefore()');
    }
    /**
     * Navigate to delete
     *
     * @return DeleteRequestBuilder
     */
    public function delete(): DeleteRequestBuilder
    {
        return new DeleteRequestBuilder($this->client, $this->requestUrl . '/delete');
    }
    /**
     * Navigate to entireColumn()
     *
     * @return EntireColumnRequestBuilder
     */
    public function entireColumn(): EntireColumnRequestBuilder
    {
        return new EntireColumnRequestBuilder($this->client, $this->requestUrl . '/entireColumn()');
    }
    /**
     * Navigate to entireRow()
     *
     * @return EntireRowRequestBuilder
     */
    public function entireRow(): EntireRowRequestBuilder
    {
        return new EntireRowRequestBuilder($this->client, $this->requestUrl . '/entireRow()');
    }
    /**
     * Navigate to insert
     *
     * @return InsertRequestBuilder
     */
    public function insert(): InsertRequestBuilder
    {
        return new InsertRequestBuilder($this->client, $this->requestUrl . '/insert');
    }
    /**
     * Navigate to lastCell()
     *
     * @return LastCellRequestBuilder
     */
    public function lastCell(): LastCellRequestBuilder
    {
        return new LastCellRequestBuilder($this->client, $this->requestUrl . '/lastCell()');
    }
    /**
     * Navigate to lastColumn()
     *
     * @return LastColumnRequestBuilder
     */
    public function lastColumn(): LastColumnRequestBuilder
    {
        return new LastColumnRequestBuilder($this->client, $this->requestUrl . '/lastColumn()');
    }
    /**
     * Navigate to lastRow()
     *
     * @return LastRowRequestBuilder
     */
    public function lastRow(): LastRowRequestBuilder
    {
        return new LastRowRequestBuilder($this->client, $this->requestUrl . '/lastRow()');
    }
    /**
     * Navigate to merge
     *
     * @return MergeRequestBuilder
     */
    public function merge(): MergeRequestBuilder
    {
        return new MergeRequestBuilder($this->client, $this->requestUrl . '/merge');
    }
    /**
     * Navigate to rowsAbove()
     *
     * @return RowsAboveRequestBuilder
     */
    public function rowsAbove(): RowsAboveRequestBuilder
    {
        return new RowsAboveRequestBuilder($this->client, $this->requestUrl . '/rowsAbove()');
    }
    /**
     * Navigate to rowsBelow()
     *
     * @return RowsBelowRequestBuilder
     */
    public function rowsBelow(): RowsBelowRequestBuilder
    {
        return new RowsBelowRequestBuilder($this->client, $this->requestUrl . '/rowsBelow()');
    }
    /**
     * Navigate to unmerge
     *
     * @return UnmergeRequestBuilder
     */
    public function unmerge(): UnmergeRequestBuilder
    {
        return new UnmergeRequestBuilder($this->client, $this->requestUrl . '/unmerge');
    }
    /**
     * Navigate to usedRange()
     *
     * @return UsedRangeRequestBuilder
     */
    public function usedRange(): UsedRangeRequestBuilder
    {
        return new UsedRangeRequestBuilder($this->client, $this->requestUrl . '/usedRange()');
    }
    /**
     * Navigate to visibleView()
     *
     * @return VisibleViewRequestBuilder
     */
    public function visibleView(): VisibleViewRequestBuilder
    {
        return new VisibleViewRequestBuilder($this->client, $this->requestUrl . '/visibleView()');
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
