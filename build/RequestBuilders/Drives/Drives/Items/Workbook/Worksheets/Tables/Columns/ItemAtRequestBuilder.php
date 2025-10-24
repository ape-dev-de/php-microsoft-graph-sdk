<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\Columns;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookTableColumn;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\Columns\FilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\Columns\DataBodyRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\Columns\HeaderRowRangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\Columns\RangeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook\Worksheets\Tables\Columns\TotalRowRangeRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/worksheets/{workbookWorksheet-id}/tables/{workbookTable-id}/columns/itemAt(index={index})
 */
class ItemAtRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function itemAt
     * @return WorkbookTableColumn|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): WorkbookTableColumn|\stdClass
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to WorkbookTableColumn|\stdClass
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
        return new WorkbookTableColumn($data);
    }
    /**
     * Navigate to filter
     *
     * @return FilterRequestBuilder
     */
    public function filter(): FilterRequestBuilder
    {
        return new FilterRequestBuilder($this->client, $this->requestUrl . '/filter');
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
     * Navigate to totalRowRange()
     *
     * @return TotalRowRangeRequestBuilder
     */
    public function totalRowRange(): TotalRowRangeRequestBuilder
    {
        return new TotalRowRangeRequestBuilder($this->client, $this->requestUrl . '/totalRowRange()');
    }
}
