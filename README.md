# Power Nap sample plugin for Craft

This plugin demonstrates how to create a new Task in Craft. It requires Craft 1.4.

Once installed, you can trigger a Power Nap by visiting `http://craft.dev/actions/powerNap/start`.

You can optionally append the following parameters to the query string:

* `description` – Overrides the default task description.
* `testError` – With this set to anything, the task will error out in the middle.

Ex: `http://craft.dev/actions/powerNap/start?description=Zzzzzzz&testError=1`
