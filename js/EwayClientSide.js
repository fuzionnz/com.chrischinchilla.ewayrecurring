/**
 * Created by eileen on 28/09/2015.
 */

function encryptField(field, apiKey) {
  if (substring(field.val(), 9) == 'eCrypted:') {
    return;
  }
  field.val(eCrypt.encryptValue(field.val(), apiKey));
}

//ewayClient(CRM.eway.ewayKey);
cj('#crm-main-content-wrapper form').submit(function() {
    encryptField(cj('#credit_card_number'), CRM.eway.ewayKey);
    encryptField(cj('#cvv2'), CRM.eway.ewayKey);
  }
);


