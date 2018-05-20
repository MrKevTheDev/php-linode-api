<?php

namespace HnhDigital\LinodeApi\Longview;

/*
 * This file is part of the PHP Linode API.
 *
 * (c) H&H|Digital <hello@hnh.digital>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use HnhDigital\LinodeApi\Foundation\Base;

/**
 * This is the Subscription class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Longview-Subscriptions
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Subscription extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'longview/subscriptions/%s';
    /**
     * Subscription Id.
     *
     * @var string
     */
    protected $subscription_id;

    /**
     * This model is fillable.
     *
     * @var bool
     */
    protected $fillable = true;

    /**
     * This model's method that provides the data to fill it.
     *
     * @var string
     */
    protected $fill_method = 'get';


    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($subscription_id, $fill = [])
    {
        $this->subscription_id = $subscription_id;
        parent::__construct($subscription_id, $fill);
    }

    /**
     * Returns a single LongviewSubscription object.  This is a public endpoint and requires no authentication.
     *
     * @link https://developers.linode.com/api/v4#operation/getLongviewSubscription
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '', [], ['auto-fill' => true]);
    }
}
