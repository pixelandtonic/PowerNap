<?php
namespace Craft;

/**
 * Power Nap controller
 */
class PowerNapController extends BaseController
{
	/**
	 * Takes a power nap.
	 */
	public function actionStart()
	{
		$description = craft()->request->getParam('description');
		$testError = (bool) craft()->request->getParam('testError');

		craft()->tasks->createTask('PowerNap', $description, array(
			'testError' => $testError
		));

		echo 'Power nap scheduled!';
		craft()->end();
	}
}
