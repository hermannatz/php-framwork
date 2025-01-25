<?php
/**
 * Description
 *
 * @package  CodeBrain\Framework\Routing
 * @since    1.0.0
 * @author   HermannAzong
 * @link     http://code-brain.com
 * @licence  GNU General Public license 2.0+
 */

namespace CodeBrain\Framework\Routing;

use CodeBrain\Framework\Http\Request;

interface RouterInterface
{
	public function dispatch(Request $request);

}