<?php
    $voter_age = 33;
    $has_pvc = true;
    $voter_ward = "020";

    if ($voter_age < 18) {
        echo "Voter is below 18 years, ineligible to vote.";
    } elseif (!$has_pvc) {
        echo "Voter does not have PVC, ineligible to vote.";
    } elseif ($voter_ward != "020") {
        echo "Voter's ward is not 020, ineligible to vote.";
    } else {
        echo "Voter is eligible to vote.";
    }
?>
