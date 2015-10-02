
This branch provides client side encryption - whereby the credit card details are encrypted in the browser and only the
encrypted version is in the POST submitted to CiviCRM. eWay is the only holder of the private key to decrypt them.
Credit for this feature : Cross Functional

The branch supports CiviCRM versions 4.6+ with the patch from [CRM-17293](https://issues.civicrm.org/jira/browse/CRM-17293)

* https://patch-diff.githubusercontent.com/raw/civicrm/civicrm-core/pull/6824.patch

4.6.9 & above should have the patch.

This branch has had the SINGLE-PAYMENT processor upgraded to the new RAPID Direct api (with client side encryption has).

This branch cannot be used for recurring payments yet. Recurring payments are intentionally disabled because they do not yet
work with client side encryption. When someone wants to upgrade it they should be aware the new interface for
recurring is almost the same as the single payments in use here & the  mapToEwayDirect function should work with both.

There are some parallel developments in the Omnipay CiviCRM extension -so check that extension too when looking at eway.

-- Your eway account

You don't need to change account to use this extension but you DO need to use an API key for the username and to set
and use an api password - you need to log into your eway sandbox to get those.

If you ALSO get a public key while logged into eway & save it against the processor then you will get client side encryption.

The url is https://api.ewaypayments.com/DirectPayment.json

-- TODO
1) get recurring working
2) fix up js for situation when user uses the back button - currently the encrypted fields are hidden but no useful message
or UI feature to allow the value to be cleared & re-shown for re-entry.

== General eway notes
Updates are done via scheduled jobs - depending on your version this will be automatically added to the scheduled jobs page

If you wish to query the details of existing tokens there is an api to do that.

However, you may wish to run if from this extension which also stores the details https://civicrm.org/extensions/payment-tokens
(e.g expiry date & masked credit card, which are OK to store if you are not storing card details)

Extension APIs - use api getfields function to find out more about these

  Single Interaction Tokens

    ewayrecurring.payment
    ewayrecurring.querytoken
    ewayrecurring.query_payment

  Scheduled Job Token
    job.eway



This extension wouldn't have been possible without the efforts and backing of : Voiceless (Sponsor), Chris Chinchilla,
Community Builders, The Australasian Tuberous Sclerosis Society (Sponsor), Henare Degan, RIGPA (Sponsor),
Ken West and Eileen McNaughton.

