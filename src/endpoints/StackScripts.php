<?php

namespace HnhDigital\LinodeApi;

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
 * This is the StackScripts class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/linode/stackscripts
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class StackScripts extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/stackscripts';
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Returns a list of public StackScripts. Results can be filtered. Include '"mine": true' in the filter dict to see only StackScripts you created.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/stackscripts#GET
     *
     * @return array
     */
    public function search()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'StackScript', 'parameters' => ['id']]);
    }

    /**
     * Creates a new config for a given Linode.
     *
     * @param string $label    Label of StackScript.
     * @param array  $images   A list of official images compatible with StackScript. Official images' creator is "linode".
     * @param string $script   The shell script to run on boot.
     * @param array  $optional
     *                         - [description] (string) Description of the StackScript.
     *                         - [is_public=null] (boolean) If true, this StackScript will be publicly visible in the Linode StackScript library. Defaults to False.
     *                         - [rev_note] (string) Release notes for this revision.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/stackscripts#POST
     *
     * @return bool
     */
    public function update($label, $images, $script, $optional = [])
    {
        return $this->apiCall('post', '', array_merge([
            'label'  => $label,
            'images' => $images,
            'script' => $script,
        ], $optional));
    }
}
