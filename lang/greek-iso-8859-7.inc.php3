<?php
/* $Id$ */
/* Translated by Kyriakos Xagoraris <theremon at users.sourceforge.net> */

$charset = 'iso-8859-7';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'tahoma, verdana, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('���', '���', '���', '���', '���', '���', '���');
$month = array('���', '���', '���', '���', '���', '����', '����', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, ���� %I:%M %p';

$strAPrimaryKey = '��� �������� ������ ���������� ��� %s';
$strAccessDenied = '\'������ ���������';
$strAction = '��������';
$strAddDeleteColumn = '��������/�������� ������ ������';
$strAddDeleteRow = '��������/�������� ������� ���������';
$strAddNewField = '�������� ���� ������';
$strAddPriv = '�������� ���� ���������';
$strAddPrivMessage = '���������� ��� ��������.';
$strAddSearchConditions = '�������� ���� ���� (���� ��� "where" ��������):';
$strAddToIndex = '�������� ��� ��������� &nbsp;%s&nbsp;�������(��)';
$strAddUser = '�������� ���� ������';
$strAddUserMessage = '���������� ��� ��� ������.';
$strAffectedRows = '������������� ��������:';
$strAfter = '���� �� %s';
$strAfterInsertBack = '���������';
$strAfterInsertNewInsert = '�������� ���� ��������';
$strAll = '���';
$strAlterOrderBy = '������ ����������� ������ ����';
$strAnIndex = '��� ��������� ���������� ��� %s';
$strAnalyzeTable = '������� ������';
$strAnd = '���';
$strAny = '�����������';
$strAnyColumn = '����������� �����';
$strAnyDatabase = '����������� ����';
$strAnyHost = '����������� �������';
$strAnyTable = '������������ �������';
$strAnyUser = '������������ �������';
$strAscending = '�������';
$strAtBeginningOfTable = '���� ���� ��� ������';
$strAtEndOfTable = '��� ����� ��� ������';
$strAttr = '��������������';
$strBack = '���������';
$strBinary = '�������';
$strBinaryDoNotEdit = '������� - ����� ���������� ������������';
$strBookmarkDeleted = '� ������� ��������.';
$strBookmarkLabel = '�������';
$strBookmarkQuery = '������������ ������ SQL';
$strBookmarkThis = '���������� ����� ��� ������ SQL';
$strBookmarkView = '���� ��������';
$strBrowse = '���������';
$strBzip = '�������� �bzip�';
$strCantLoadMySQL = '��� ������ �� �������� � �������� MySQL,<br />�������� ������� ��� ��������� ��� PHP.';
$strCantLoadRecodeIconv = '��� ����� ������ � ������� ��� ��������� iconv � recode ��� ���������� ��� ��� ��������� ��� ��� ����������. �������� ��� php �� ��������� ��� ����� ����� ��� ���������� � ��������������� ��� ��������� ���������� ��� phpMyAdmin.';  //to translate
$strCantRenameIdxToPrimary = '� ����������� ��� ���������� �� PRIMARY �� ����� ������!';
$strCantUseRecodeIconv = '��� ����� ������ � ����� ��� ��������� iconv ���� ��� libiconv ���� ��� �������� recode_string, ��� � �������� ���� ��������. ������ ��� ��������� ��� php.';  //to translate
$strCardinality = '������������';
$strCarriage = '���������� ����������: \\r';
$strChange = '������';
$strChangeDisplay = '�������� ����� ��� ��������';  //to translate
$strChangePassword = '������ ������� ���������';
$strCheckAll = '������� ����';
$strCheckDbPriv = '������� ��������� �����';
$strCheckTable = '������� ������';
$strChoosePage = '�������� �������� ������ ��� ������';  //to translate
$strColumn = '�����';
$strColumnNames = '������� ������';
$strComments = '������';  //to translate
$strCompleteInserts = '������������� ������� �Insert�';
$strConfigFileError = '�� phpMyAdmin ��� ������� �� �������� �� ������ ���������!<br />���� ������ �� ������ ��� � php ���� ������ ����� ��� ������ � ��� � php ��� ������ �� ���� �� ������.<br />�������� ������� �� ������ ��������� ��\' ������� ��������������� �� �������� link ��� �������� �� �������� ������ ��� �� ���������� � php. ���� ������������ ����������� ����� ������� ���������� (") � ����������� (;).<br />��� � php ���������� ��� ����� ������, ��� ����� �����.'; //to translate
$strConfigureTableCoord = '�������� ������ ��� ������������� ��� ��� ������ %s';  //to translate
$strConfirm = '���������� ������ �� �� ����������;';
$strCookiesRequired = '��� ���� �� ������ ������ �� ����� �������������� cookies.';
$strCopyTable = '��������� ������ �� (����<b>.</b>�������):';
$strCopyTableOK = '� ������� %s ����������� ��� %s.';
$strCreate = '����������';
$strCreateIndex = '���������� ���������� �� &nbsp;%s&nbsp;�����';
$strCreateIndexTopic = '���������� ���� ����������';
$strCreateNewDatabase = '���������� ���� �����';
$strCreateNewTable = '���������� ���� ������ ��� ���� %s';
$strCreatePage = '���������� ���� �������';  //to translate
$strCriteria = '��������';
$strData = '��������';
$strDataOnly = '���� �� ��������';
$strDatabase = '���� ';
$strDatabaseHasBeenDropped = '� ���� ��������� %s ��������.';
$strDatabaseWildcard = '���� ��������� (������������ wildcards):';
$strDatabases = '������';
$strDatabasesStats = '���������� �����';
$strDefault = '��������������';
$strDelete = '��������';
$strDeleteFailed = '� �������� �������';
$strDeleteUserMessage = '���������� ��� ������ %s.';
$strDeleted = '� ������� ���� ���������';
$strDeletedRows = '������������ ��������:';
$strDescending = '��������';
$strDisplay = '��������';
$strDisplayOrder = '����� ���������:';
$strDisplayPDF = '�������� �������� PDF';  //to translate
$strDoAQuery = '�������� ��� ���������� ���� ���������� (���������� ��������� "%")';
$strDoYouReally = '������ �� ���������� ��� ������';
$strDocu = '����������';
$strDrop = '��������';
$strDropDB = '�������� ����� %s';
$strDropTable = '�������� ������';
$strDumpXRows = '�������� %s �������� ���������� ��� ��� ������� %s.'; //to translate
$strDumpingData = '\'�������� ��������� ��� ������';
$strDynamic = '��������';
$strEdit = '�����������';
$strEditPDFPages = '������ ������� PDF';  //to translate
$strEditPrivileges = '����������� ���������';
$strEffective = '���������������';
$strEmpty = '\'��������';
$strEmptyResultSet = '� MySQL ��������� ��� ����� ������ ������������� (�.�. ������ �������).';
$strEnd = '�����';
$strEnglishPrivileges = ' ��������: �� ������� ��������� ��� MySQL ����������� ��� ������� ';
$strError = '�����';
$strExplain = '������� ������ SQL';  //to translate
$strExport = '�������';  //to translate
$strExportToXML = 'Export to XML format'; //to translate
$strExtendedInserts = '����������� ������� �Insert�';
$strExtra = '��������';
$strField = '�����';
$strFieldHasBeenDropped = '�� ����� %s ��������';
$strFields = '�����';
$strFieldsEmpty = ' � ���������� ��� ������ ����� ����! ';
$strFieldsEnclosedBy = '����� ��� ������������� ��';
$strFieldsEscapedBy = '�� ����� ������������� �� ��������� �������� ';
$strFieldsTerminatedBy = '����� ��� ���������� ��';
$strFixed = '��������������� ������';
$strFlushTable = '���������� ("FLUSH") ������';
$strFormEmpty = '�������� ���� ��� ����� !';
$strFormat = '�����������';
$strFullText = '����� �������';
$strFunction = '�������';
$strGenBy = '������������� ���:'; //to translate
$strGenTime = '������ �����������';
$strGo = '��������';
$strGrants = '������������';
$strGzip = '�������� �gzip�';
$strHasBeenAltered = '���� ��������.';
$strHasBeenCreated = '���� ������������.';
$strHaveToShow = '������ �� ��������� ����������� ��� ����� ��� ��������';  //to translate
$strHome = '�������� ������';
$strHomepageOfficial = '������� ������ ��� phpMyAdmin';
$strHomepageSourceforge = '������ ��� Sourceforge ��� ��� �������� ��� phpMyAdmin';
$strHost = '�������';
$strHostEmpty = '�� ����� ��� ���������� ����� ����!';
$strIdxFulltext = '������ �������';
$strIfYouWish = '�� ������������ �� ��������� ���� ������� ��� ��� ������ ��� ������, ��������� ��� ����� ������ ������������ �� �����.';
$strIgnore = '��������';
$strInUse = '�� �����';
$strIndex = '���������';
$strIndexHasBeenDropped = '�� ��������� %s ��������';
$strIndexName = '����� ����������&nbsp;:';
$strIndexType = '����� ����������&nbsp;:';
$strIndexes = '���������';
$strInsert = '��������';
$strInsertAsNewRow = '�������� �� ��� ��������';
$strInsertNewRow = '�������� ���� ��������';
$strInsertTextfiles = '�������� ������� �������� ���� ������';
$strInsertedRows = '����������� ��������:';
$strInstructions = '�������';
$strInvalidName = '� �%s� ����� ���������� ����, ��� �������� �� ��� ��������������� �� ����� ��� ����, ������ � �����.';
$strKeepPass = '��������� ������� ���������';
$strKeyname = '����� ��������';
$strKill = '�����������';
$strLength = '�����';
$strLengthSet = '�����/�����*';
$strLimitNumRows = '�������� ��� ������';
$strLineFeed = '���������� ��������� �������: \\n';
$strLines = '�������';
$strLinesTerminatedBy = '������� ��� ���������� ��';
$strLinkNotFound = '��� ������� � �������';  //to translate
$strLinksTo = '������� ��';  //to translate
$strLocationTextfile = '��������� ��� ������� ��������';
$strLogPassword = '������� ���������:';
$strLogUsername = '����� ������:';
$strLogin = '�������';
$strLogout = '����������';
$strMissingBracket = '������ ��� ������';  //to translate
$strModifications = '�� ������� �������������';
$strModify = '�����������';
$strModifyIndexTopic = '������ ���� ����������';
$strMoveTable = '�������� ������ �� (����<b>.</b>�������):';
$strMoveTableOK = '� ������� %s ����������� ��� %s.';
$strMySQLCharset = '��� ���������� ��� MySQL';  //to translate
$strMySQLReloaded = '� MySQL ��������������.';
$strMySQLSaid = '� MySQL ��������� �� ������: ';
$strMySQLServerProcess = '� MySQL %pma_s1% ���������� ���� %pma_s2% �� %pma_s3%';
$strMySQLShowProcess = '�������� ����������';
$strMySQLShowStatus = '�������� ���������� ��������� ��� MySQL';
$strMySQLShowVars = '�������� ���������� ��� MySQL';
$strName = '�����';
$strNext = '�������';
$strNo = '���';
$strNoDatabases = '��� �������� ������ ���������';
$strNoDescription = '����� ���������';  //to translate
$strNoDropDatabases = '�� ������� �DROP DATABASE� ����� ���������������.';
$strNoFrames = '�� phpMyAdmin ����� ��� ������ �� ���� browser <b>��� ����������� frames</b>.';
$strNoIndex = '��� �������� ���������!';
$strNoIndexPartsDefined = '��� ��������� �� �������� ��� ����������!';
$strNoModification = '����� ������';
$strNoPassword = '����� ������ ���������';
$strNoPhp = '����� ������ PHP';  //to translate
$strNoPrivileges = '����� ��������';
$strNoQuery = '��� ������� ������ SQL!';
$strNoRights = '��� ����� ������ ���������� �� ������� ��� ����!';
$strNoTablesFound = '��� �������� ������� ��� ����.';
$strNoUsersFound = '��� �������� �������.';
$strNone = '������';
$strNotNumber = '���� ��� ����� �������!';
$strNotSet = '� ������� <b>%s</b> ��� ������� � ��� �������� ��� %s';  //to translate
$strNotValidNumber = ' ��� ����� �������� ������� ��������!';
$strNull = '����';
$strNumSearchResultsInTable = '%s ������������ ���� ������ <i>%s</i>';//to translate
$strNumSearchResultsTotal = '<b>������:</b> <i>%s</i> ������������';//to translate
$strOftenQuotation = '����� ����������. �� OPTIONALLY �������� ��� ���� �� ����� char ��� varchar ������������� �� ��� ��������� ���������������� ����.';
$strOperations = '�����������';  //to translate
$strOptimizeTable = '�������������� ������';
$strOptionalControls = '�����������. �������� ��� �� ������� � �������� ��� � ������� ������� ����������.';
$strOptionally = '�����������';
$strOptions = '��������';  //to translate
$strOr = '�';
$strOverhead = '����������';
$strPHPVersion = '������ PHP';
$strPageNumber = '������:';  //to translate
$strPartialText = '��������� �������';
$strPassword = '������� ���������';
$strPasswordEmpty = '� ������� ��������� ����� �����!';
$strPasswordNotSame = '�� ������� ��������� ��� ����� �����!';
$strPdfDbSchema = '����� ��� ����� "%s" - ������ %s';  //to translate
$strPdfInvalidPageNum = '��� �������� ������� ������� PDF!';  //to translate
$strPdfInvalidTblName = '� ������� "%s" ��� �������!';  //to translate
$strPhp = '���������� ������ PHP';  //to translate
$strPmaDocumentation = '���������� phpMyAdmin';
$strPmaUriError = '� ������ <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ �� ������� ��� ������ �����������!';
$strPos1 = '����';
$strPrevious = '�����������';
$strPrimary = '��������';
$strPrimaryKey = '�������� ������';
$strPrimaryKeyHasBeenDropped = '�� �������� ������ ��������';
$strPrimaryKeyName = '�� ����� ��� ����������� �������� ������ �� �����... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> �� ����� �� ����� ��� ����������� �������� ��� <b>���� �����</b> !)';
$strPrintView = '�������� ��� ��������';
$strPrivileges = '��������';
$strProperties = '���������';
$strQBE = '��������� ���� ����������';
$strQBEDel = '��������';
$strQBEIns = '��������';
$strQueryOnDb = '������ SQL ��� ���� <b>%s</b>:';
$strReType = '�������������';
$strRecords = '��������';
$strReferentialIntegrity = '������� ������������ �������:';
$strRelationView = '�������� �������';  //to translate
$strReloadFailed = '� ������������ ��� MySQL �������.';
$strReloadMySQL = '������������ ��� MySQL';
$strRememberReload = '�������� ��� ������������� ��� ����������.';
$strRenameTable = '����������� ������ ��';
$strRenameTableOK = '� ������� %s ������������� �� %s';
$strRepairTable = '����������� ������';
$strReplace = '�������������';
$strReplaceTable = '������������� ��������� ������ �� �� ������';
$strReset = '���������';
$strRevoke = '��������';
$strRevokeGrant = '�������� �����������';
$strRevokeGrantMessage = '����������� �� �������� ����������� ��� %s';
$strRevokeMessage = '����������� �� �������� ��� %s';
$strRevokePriv = '�������� ����������';
$strRowLength = '������� �������';
$strRowSize = ' ������� �������� ';
$strRows = '��������';
$strRowsFrom = '�������� ���������� ��� ��� �������';
$strRowsModeHorizontal = '���������';
$strRowsModeOptions = '�� %s ����� �� ��������� ������������ ��� %s �����';
$strRowsModeVertical = '������';
$strRowsStatistic = '���������� ��������';
$strRunQuery = '������� ����������';
$strRunSQLQuery = '�������� �������/������� SQL ��� ���� ��������� %s';
$strRunning = '��� ���������� ��� %s';
$strSQL = 'SQL'; //to translate
$strSQLQuery = '������ SQL';
$strSQLResult = '���������� SQL'; //to translate
$strSave = '����������';
$strScaleFactorSmall = '� ������� ����� ���� ����� ��� �� ���������� �� ����� �� ��� ������';  //to translate
$strSearch = '���������';//to translate
$strSearchFormTitle = '��������� ��� ����';//to translate
$strSearchInTables = '���� ����� �������:';//to translate
$strSearchNeedle = '���� � ����� ��� ��������� (���������: "%"):';//to translate
$strSearchOption1 = '����������� ���� ��� ���� �����';//to translate
$strSearchOption2 = '����� ���� �����';//to translate
$strSearchOption3 = '��� ������ �����';//to translate
$strSearchOption4 = '�� regular expression';//to translate
$strSearchResultsFor = '������������ ���������� ��� "<i>%s</i>" %s:';//to translate
$strSearchType = '������:';//to translate
$strSelect = '�������';
$strSelectADb = '�������� �������� ��� ���� ���������';
$strSelectAll = '������� ����';
$strSelectFields = '������� ������ (����������� ���)';
$strSelectNumRows = '���� ������';
$strSelectTables = '������� �������';  //to translate
$strSend = '��������';
$strServerChoice = '������� ����������';
$strServerVersion = '������ ����������';
$strSetEnumVal = '�� � ����� ��� ������ ����� �enum� � �set�, �������� �������� ��� ����� ��������������� ��� ���� �����������: \'�\',\'�\',\'�\'...<br /> �� ���������� �� �������� ��� ������� ������ ("\") � ���� ���������� ("\'"), �������� �� �� ������� ������ ���� ���� (��� ���������� \'\\\\���\' � \'�\\\'�\').';
$strShow = '��������';
$strShowAll = '�������� ����';
$strShowColor = '�������� ��������';  //to translate
$strShowCols = '�������� ������';
$strShowGrid = '�������� ���������';  //to translate
$strShowPHPInfo = '�������� ����������� ��� PHP';
$strShowTableDimension = '�������� ���������� �������';  //to translate
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ��� ���� ����� ��� ������ ';
$strShowingRecords = '�������� �������� ';
$strSingly = '(��������)';
$strSize = '�������';
$strSort = '����������';
$strSpaceUsage = '����� �����';
$strSplitWordsWithSpace = '�� ������ ���������� ��� ��� ��������� ����������� (" ").';//to translate
$strStatement = '��������';
$strStrucCSV = '�������� CSV';
$strStrucData = '���� ��� ��������';
$strStrucDrop = '�������� �Drop Table�';
$strStrucExcelCSV = '����� CSV ��� �������� Ms Excel';
$strStrucOnly = '���� � ����';
$strStructPropose = '������������ ���� ������';  //to translate
$strStructure = '����';  //to translate
$strSubmit = '��������';
$strSuccess = '� SQL ������ ��� ����������� ��������';
$strSum = '������';
$strTable = '������� ';
$strTableComments = '������ ������';
$strTableEmpty = '�� ����� ��� ������ ����� ����!';
$strTableHasBeenDropped = '� ������� %s ��������';
$strTableHasBeenEmptied = '� ������� %s �������';
$strTableHasBeenFlushed = '� ������� %s ������������� ("FLUSH")';
$strTableMaintenance = '��������� ������';
$strTableStructure = '���� ������ ��� ��� ������';
$strTableType = '����� ������';
$strTables = '%s �������/�������';
$strTextAreaLength = ' �������� ��� ������� ���,<br /> ���� �� ����� ������ �� �� ������ �� ��������� ';
$strTheContent = '�� ����������� ��� ������� ��� ����� ���������.';
$strTheContents = '�� ����������� ��� ������� ������������� �� ����������� ��� ����������� ������ ��� ������� �� ���� �������� � �������� ������.';
$strTheTerminator = '� ���������� ���������� ��� ������.';
$strTotal = '��������';
$strType = '�����';
$strUncheckAll = '��������� ����';
$strUnique = '��������';
$strUnselectAll = '��������� ����';
$strUpdatePrivMessage = '�� �������� ��� ������ %s ������������.';
$strUpdateProfile = '��������� ���������:';
$strUpdateProfileMessage = '�� �������� �����������.';
$strUpdateQuery = '��������� ��� �������';
$strUsage = '�����';
$strUseBackquotes = '����� �������� ����������� ��� ������� ��� ������� ��� ��� ������';
$strUseTables = '����� �������';
$strUser = '�������';
$strUserEmpty = '�� ����� ��� ������ ����� ����!';
$strUserName = '����� ������';
$strUsers = '�������';
$strValue = '����';
$strViewDump = '�������� �������� ��� ������';
$strViewDumpDB = '�������� �������� ��� �����';
$strWelcome = '����������� ��� %s';
$strWithChecked = '�� ���� ������������:';
$strWrongUser = '���������� ����� ������/������� ���������. \'������ ���������.';
$strYes = '���';
$strZip = '�������� �zip�';
// To translate
$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strAllTableSameWidth = 'display all Tables with same width?';  //to translate
?>
