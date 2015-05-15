# CategoryClass
Vanilla plugin that adds categories css class to discussion items in recent discussions list.

If this isn't working for table view, you can fix that by opening `applications/vanilla/views/discussions/table_functions.php`, search for `//   $Sender->FireEvent('BeforeDiscussionName');` and delete the two slashes from the start of the line.
