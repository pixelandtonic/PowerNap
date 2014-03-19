<?php
namespace Craft;

/**
 * Power Nap task
 */
class PowerNapTask extends BaseTask
{
	/**
	 * Defines the settings.
	 *
	 * @access protected
	 * @return array
	 */
	protected function defineSettings()
	{
		return array(
			'testError' => AttributeType::Bool,
		);
	}

	/**
	 * Returns the default description for this task.
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return 'Taking a power nap';
	}

	/**
	 * Gets the total number of steps for this task.
	 *
	 * @return int
	 */
	public function getTotalSteps()
	{
		return 5;
	}

	/**
	 * Runs a task step.
	 *
	 * @param int $step
	 * @return bool
	 */
	public function runStep($step)
	{
		if ($step == 3)
		{
			return $this->runSubTask('PowerNap_Inception', null, array(
				'testError' => $this->getSettings()->testError
			));
		}
		else
		{
			sleep(1);
			return true;
		}
	}
}
