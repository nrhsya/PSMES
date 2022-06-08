//function to generate random dates based on start and end date input by coordinator
function assignSlot() {

    var startDateInput;
    var endDateInput;

    var assignEvDate = rand(startDateInput, endDateInput);

    return date('Y-m-d H:i:s', assignEvDate);
}

function randomDate($start_date, $end_date)
{
    // Convert to timetamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return date('Y-m-d H:i:s', $val);
}


function randomDateInRange(DateTime $start, DateTime $end) {
    $randomTimestamp = mt_rand($start->getTimestamp(), $end->getTimestamp());
    $randomDate = new DateTime();
    $randomDate->setTimestamp($randomTimestamp);
    return $randomDate;
}