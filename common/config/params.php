<?php
return [
    'generalTitle' => 'COCRI - Self Service',
    'adminEmail' => 'customer@softeboard.com',
    'supportEmail' => 'customer@softeboard.com',
    'senderEmail' => 'customer@softeboard.com',
    'senderName' => 'HRMIS mailer',
    'user.passwordResetTokenExpire' => 3600,
    'powered' => 'Iansoft Ltd',
    'NavisionUsername'=>'HP ELITEBOOK 840 G5',
    'NavisionPassword'=>'@francis123#',


    'NavTestApprover' => 'Approver',
    'NavTestApproverPassword' => '@Approver123',

    'server'=>'FRANCIS',//'app-svr-dev.rbss.com',//Navision Server
    'WebServicePort'=>'4047',//Nav server Port
    'ServerInstance'=>'BC140',//Nav Server Instance
    'CompanyName'=>'COGRI',//Nav Company,
    'CompanyNameStripped' => 'COGRI$',
    'ldPrefix'=>'francis',//ACTIVE DIRECTORY prefix
    'adServer' => 'KRB-SVR7.KRBHQS.GO.KE', //Active directory domain controller

    //sharepoint config
    'sharepointUrl' => 'https://aaofsciences.sharepoint.com',//'https://ackads.sharepoint.com',
    'sharepointUsername' => 'Navision@aasciences.africa',//'francis@ackads.onmicrosoft.com',
    'sharepointPassword' => 'Nav9orta7',// Sp password
    'library' => 'Portal',// Sharepoint Library,
    'clientID' => '7e92ce54-e4bf-491a-bef6-eb94044ce297', // SP App Client ID
    'clientSecret' => 'Q6UJkB3bRlPkGBjWNgrQVCyyjL2vgi5rtP7THpLwJ+s=', // SP Client Secret

    'profileControllers' => [
        'applicantprofile',
        'experience',
        'qualification',
        'hobby',
        'language',
        'referee',
        'recruitment',
        'employeerequisition'
    ],
    'codeUnits' => [
        'Portal_Workflows', //50019
        'JobApplication', //50023
        'AppraisalWorkflow' => 'AppraisalWorkflow', //50020 np  not taken to live
        'PortalReports', //50021
        'ContractRenewalStatusChange', // 50024
        'PortalFactory', // 50062
        'ImprestManagement', // 50017
    ],
    'ServiceName'=>[

        'ImprestRequestList' => 'ImprestRequestList', //64020 (Page)
        'ImprestRequestCard' => 'ImprestRequestCard', //64021 (Page)
        'ImprestRequestLine' => 'ImprestRequestLine', //64022 (Page)


        'ImprestRequestListPortal' => 'ImprestRequestListPortal', //64028 (Page)
        'ImprestRequestCardPortal' => 'ImprestRequestCardPortal', //64029 (Page)

        'ImprestSurrenderList' => 'ImprestSurrenderList', // 64030 (Page)
        'ImprestSurrenderCard' => 'ImprestSurrenderCard', // 64031 (Page)
        'ImprestSurrenderCardPortal' => 'ImprestSurrenderCardPortal', //64059 (Page)
        'PostedImprestRequest' => 'PostedImprestRequest', //64026 (Page)
        'PostedReceiptsList' => 'PostedReceiptsList',//64056 (Page)

        'AllowanceRequestList' => 'AllowanceRequestList', //64093(Page)
        'AllowanceRequestCard' => 'AllowanceRequestCard', // 64094(Page)
        'AllowanceRequestLine' => 'AllowanceRequestLine', //64095 (Page)
        'AllowanceRequestPendingApp' => 'AllowanceRequestPendingApp', //64096 (Page)
        'ApprovedAllowanceRequest' => 'ApprovedAllowanceRequest', //64097 (Page)
        'RejectedAllowanceRequest' => 'RejectedAllowanceRequest', //64098 (Page)
        'PostedAllowanceRequest' => 'PostedAllowanceRequest', // 64099 (Page)
        'RequisitionRates' => 'RequisitionRates', //65019 (Page)


        'Currencies' => 'Currencies', // Page 5

        'purchaseDocumentLines'=>'purchaseDocumentLines',//6405
        'UserSetup' => 'UserSetup', //119

        'EmployeeCard' => 'EmployeeCard', //5200
        'Employees' => 'Employees', //70312

        'DimensionValueList' => 'DimensionValueList', //560
        'PaymentTypes' => 'PaymentTypes', //64058

        'leaveApplicationList' => 'leaveApplicationList', // 71053
        'leaveApplicationCard' => 'leaveApplicationCard', //71075
        'leaveBalance' => 'leaveBalance',//71153
        'leaveTypes' => 'leaveTypes', //70045
        'leaveRecallCard' => 'leaveRecallCard',//71076
        'leaveRecallList' => 'leaveRecallList',//71077
        'activeLeaveList' => 'activeLeaveList',//69005

        'Approvals' => 'Approvals', //654---------------duplicated
        'ApprovalComments' => 'ApprovalComments', //660
        'RejectedApprovalEntries' => 'RejectedApprovalEntries', //50003

        'RequisitionEmployeeList' => 'RequisitionEmployeeList',//70029
        'RequisitionEmployeeCard' => 'RequisitionEmployeeCard',//70028
        'JobsList' => 'JobsList',//70009
        'JobsCard' => 'JobsCard',//70002
        'JobApplicantProfile' => 'JobApplicantProfile', //50001
        'applicantProfile' => 'applicantProfile',//50001
        'referees' => 'referees',//55060
        'applicantLanguages' => 'applicantLanguages', //55061
        'experience' => 'experience', //55062
        'hobbies' => 'hobbies', //55063
        'qualifications' => 'qualifications',//55064
        'JobResponsibilities' => 'JobResponsibilities',//69000 -->specs
        'JobRequirements' => 'JobRequirements', //69001 ---> specs
        'JobExperience' => 'JobExperience',//69004
        'HRqualifications' => 'HRqualifications', //5205
        'JobApplicantRequirementEntries' => 'JobApplicantRequirementEntries', //55065
        'HRJobApplicationsList' => 'HRJobApplicationsList', //70020 ----> Not published on client side
        'HRJobApplicationsCard'=>'HRJobApplicationsCard',//70021

        'Countries' => 'Countries', //10
        'Religion' => 'Religion', //70085

        //Appraisal--------------------------------------------------------------------------------
        'AppraisalRating' => 'AppraisalRating',//60023
        'AppraisalProficiencyLevel' => 'AppraisalProficiencyLevel', //60025
        'AppraisalList' => 'AppraisalList', //60007
        'AppraisalCard' => 'AppraisalCard',//60008
        'EmployeeAppraisalKPI' => 'EmployeeAppraisalKPI', //60010 --->Employee objectives
        'SubmittedAppraisals' => 'SubmittedAppraisals', //60012
        'ApprovedAppraisals' => 'ApprovedAppraisals', //60013
        'MYAppraiseeList' => 'MYAppraiseeList',//60014
        'MYSupervisorList' => 'MYSupervisorList',//60015
        'MYApprovedList' => 'MYApprovedList',//60016
        'EYAppraiseeList' => 'EYAppraiseeList',//60017
        'EYSupervisorList' => 'EYSupervisorList',//60018
        'EYPeer1List' => 'EYPeer1List',//60019
        'EYPeer2List' => 'EYPeer2List',//60020
        'EYAgreementList' => 'EYAgreementList',//60021
        'ClosedAppraisalsList' => 'ClosedAppraisalsList',//60022

        'CareerDevelopmentPlan' => 'CareerDevelopmentPlan', //60038 -->Not Taken to live server
        'CareerDevStrengths' => 'CareerDevStrengths', //60039 -->Not Taken to live server
        'FurtherDevAreas' => 'FurtherDevAreas', //60040 -->Not Taken to live server
        'WeeknessDevPlan' => 'WeeknessDevPlan', //60041 -->Not Taken to live server



        'ProbationCard' => 'ProbationCard', // 60042
        'ProbationList' => 'ProbationList', // 60043
        'ProbationSupervisorList' => 'ProbationSupervisorList', //60044
        'Probationhrlist' => 'Probationhrlist', //60045
        'closedprobationappraisals' => 'closedprobationappraisals', //60046
        'NewEmpObjectives' => 'NewEmpObjectives', //60047

        'AppraisalWorkflow' => 'AppraisalWorkflow', // 50020 ---> Code Unit
        'PerformanceLevel' => 'PerformanceLevel',//60037 page

        'EmployeeAppraisalKRA' => 'EmployeeAppraisalKRA',//60009
        'TrainingPlan' => 'TrainingPlan', //60036
        'EmployeeAppraisalCompetence' => 'EmployeeAppraisalCompetence',//60033
        'EmployeeAppraisalBehaviours' => 'EmployeeAppraisalBehaviours', //60034
        'LearningAssessmentCompetence' => 'LearningAssessmentCompetence', //60035


        //Payslip report
        'PortalReports' => 'PortalReports',//50021
        'Payrollperiods' => 'Payrollperiods', //70255

        //P9 report

        'P9YEARS' => 'P9YEARS', //70286



        //Approval code unit
        'Portal_Workflows' => 'Portal_Workflows', //50019

        //Job Application Code Unit
        'JobApplication' => 'JobApplication', //50023

        /* Request to Approve */
        'RequeststoApprove' => 'RequeststoApprove', //654
        'RequestsTo_ApprovePortal'=> 'RequestsTo_ApprovePortal', // 67123


        /* Contract Renewal Services*/

        'NewContractRenewal' => 'NewContractRenewal', // 55077
        'supervisorList' => 'supervisorList', // 55078
        'Hrcontractslist' => 'Hrcontractslist', // 55079
        'ApprovedContractsList' => 'ApprovedContractsList', // 55080
        'RejectedContractRenewal' => 'RejectedContractRenewal', // 55081
        'ContractRenewalCard' => 'ContractRenewalCard', // 55082

        'ContractRenewalStatusChange' => 'ContractRenewalStatusChange', // Code Unit 50024
        'PortalFactory' => 'PortalFactory', //Code Unit 50062
        'ImprestManagement' => 'ImprestManagement', // 50017



    ],
    'QualificationsMimeTypes' => [

        'application/pdf',

    ],
    'Microsoft' => [
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
        'application/vnd.ms-word.document.macroEnabled.12',
        'application/vnd.ms-word.template.macroEnabled.12',
        'application/vnd.ms-excel',
        'application/vnd.ms-excel',
        'application/vnd.ms-excel',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
        'application/vnd.ms-excel.sheet.macroEnabled.12',
        'application/vnd.ms-excel.template.macroEnabled.12',
        'application/vnd.ms-excel.addin.macroEnabled.12',
        'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
        'application/vnd.ms-powerpoint',
        'application/vnd.ms-powerpoint',
        'application/vnd.ms-powerpoint',
        'application/vnd.ms-powerpoint',
        'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        'application/vnd.openxmlformats-officedocument.presentationml.template',
        'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
        'application/vnd.ms-powerpoint.addin.macroEnabled.12',
        'application/vnd.ms-powerpoint.presentation.macroEnabled.12',
        'application/vnd.ms-powerpoint.template.macroEnabled.12',
        'application/vnd.ms-powerpoint.slideshow.macroEnabled.12',
        'application/vnd.ms-access',
        'application/rtf',
        'application/octet-stream'
    ]

];
