var MyApp = angular.module('MyApp', ['ui.bootstrap','ngRoute']);

MyApp.controller('TabsDemoCtrl', function ($scope, $window) {
  $scope.tab1s = [
    { title:'Paper 1', status_class:'btn btn-success', status:'Accepted', message: 'Congrats! Your paper has been Accepted!!', hyperlink:'' },
    { title:'Paper 2', status_class:'btn btn-warning' , status:'Forwarded', message: 'Your paper has been forwarder to reviewers', hyperlink:''}
  ];
    
  $scope.tab2s = [
    { title:'Paper 1',  status_class:'btn btn-success', status:'Accepted', message: 'Congrats! Your paper has been Accepted!!', hyperlink:'' },
    { title:'Paper 2',  status_class:'btn btn-success', status:'Accepted', message: 'Congrats! Your paper has been Accepted!!', hyperlink:''},
    { title:'Paper 3',   status_class:'btn btn-danger', status:'Rejected', message: 'Sorry your paper has been rejected', hyperlink:''},
    { title:'Paper 4', status_class:'btn btn-success', status:'Accepted', message: 'Congrats! Your paper has been Accepted!!', hyperlink:''}
  ];

});

MyApp.controller('MsgCtrl', function ($scope,$window) {
  $scope.gmsgs = [{msg:'the Conference dates are now avaiable'},
                  {msg:'Your paper:xyzabc has been accepted '},
                  {msg:'Your paper:xyz1abc2 has been accepted '},
                 ];
     $scope.imsgs = [{msg:'the Conference dates are now avaiable'},
                     {msg:'Form for registeration for xyz conference are available at xyz.com'},
                    ];
     $scope.wmsgs = [{msg:'Your paper:xyz wasnt in proper format .please correct the format and upload again'},
                  {msg:'last date for registeration for xyz conference is 22 dec 2016'},
                 ];
     $scope.dmsgs = [{msg:'Your paper has inappropriate content and has been rejected'},
                  {msg:'you have been disqualified for xyz conference due to inappropriate content submission'},
                 ];
    });

MyApp.controller('FileViewCtrl', function($scope, $window){
    $scope.tabs = [
        {
            filename : 'Uploaded File 1.pdf',
            hyperlink1 : '',
            hyperlink2 : '',
            upload_date : 'Uploaded on dd-mm-yyyy hh:mm',
            uploaded_for : 'Uploaded for Conference Name'
        },
        {
            filename : 'Uploaded File 2.pdf',
            hyperlink1 : '',
            hyperlink2 : '',
            upload_date : 'Uploaded on dd-mm-yyyy hh:mm',
            uploaded_for : 'Uploaded for Conference Name'
        },
        {
            filename : 'Uploaded File 3.pdf',
            hyperlink1 : '',
            hyperlink2 : '',
            upload_date : 'Uploaded on dd-mm-yyyy hh:mm',
            uploaded_for : 'Uploaded for Conference Name'
        },
        {
            filename : 'Uploaded File 4.pdf',
            hyperlink1 : '',
            hyperlink2 : '',
            upload_date : 'Uploaded on dd-mm-yyyy hh:mm',
            uploaded_for : 'Uploaded for Conference Name'
        }
    ];
});

MyApp.controller('sidebar', function($scope) 
                 {
  var trigger = false;
    $scope.user=true;
    $scope.hambrgr="hamburger is-open";
    $scope.wrapper="wrapper toggled";
        $scope.toggle = function() {
                    
                  if(trigger==true)
                {
                    $scope.hambrgr="hamburger is-open";
                    $scope.wrapper="wrapper toggled";
                    trigger=false;
                }
            else
                {
                    $scope.hambrgr="hamburger is-closed";
                    $scope.wrapper="wrapper";
                    trigger=true;
                }
        }
});


MyApp.controller('streamCtrl', function($scope){
    $scope.streams = ['Cloud Infrastructure as a Service',' Cloud Platform as a Service',' Cloud federation and hybrid cloud infrastructure',' Programming models and systems/tools',' Green data center',' Networking technologies for data center',' Cloud system design with FPGA, GPU, and APU',' Economic and business models',' Dynamic resource provisioning',' Accountability',' Audit in clouds',' Authentication and authorization',' Cryptographic primitives ',' Reliability and availability',' Trust and credential management',' Usability and security',' Security and privacy in clouds',' Legacy systems migration',' Cloud Integrity and Binding Issues',' Cloud Service Composition',' Query and discovery models for cloud services',' Trust and Security in cloud services',' Change management in cloud services',' Organization models of cloud services',' Innovative cloud applications and experiences',' Business process and workflow management',' Service-Oriented Architecture in clouds',' Server, storage, network virtualization',' Resource monitoring',' Virtual desktop',' Resilience, fault tolerance',' Modeling and performance evaluation',' Security aspects',' Enabling disaster recovery, job migration',' Energy efficient issues',' Load balancing for HPC clouds',' Middleware framework for HPC clouds',' Scalable scheduling for HPC clouds',' HPC as a Service',' Performance Modeling and Management',' Programming models for HPC clouds',' HPC cloud applications',' Optimal cloud deployment for HPC ',' Novel Theoretical Models for Big Data',' New Computational Models for Big Data',' Data and Information Quality for Big Data',' New Data Standards',' Cloud/Grid/Stream Computing for Big Data',' High Performance/Parallel Computing Platforms for Big Data',' Autonomic Computing and Cyber-infrastructure, System Architectures, Design and Deployment',' Energy efficient Computing for Big Data',' Programming Models and Environments for Cluster, Cloud, and Grid Computing to Support Big Data',' Software Techniques and Architectures in Cloud/Grid/Stream Computing',' Big Data Open Platforms',' New Programming Models for Big Data beyond Hadoop /MapReduce, STORM',' Software Systems to Support Big Data Computing',' Advanced database and Web Applications',' Novel Data Model and Databases for Emerging Hardware',' Data Preservation',' Data Provenance',' Interfaces to Database Systems and Analytics Software Systems',' Data Protection, Integrity and Privacy Standards and Policies',' Information Integration and Heterogeneous and Multi-structured Data Integration',' Data management for Mobile and Pervasive Computing',' Data Management in the Social Web',' Crowd sourcing',' Spatiotemporal and Stream Data Management',' Scientific Data Management',' Workflow Optimization',' Database Management Challenges: Architecture, Storage, User Interfaces',' Social Web Search and Mining',' Web Search ',' Algorithms and Systems for Big Data Search',' Distributed, and Peer-to-peer Search',' Big Data Search Architectures, Scalability and Efficiency',' Data Acquisition, Integration, Cleaning, and Best Practices',' Visualization Analytics for Big Data',' Computational Modeling and Data Integration',' Large-scale Recommendation Systems and Social Media Systems',' Cloud/Grid/Stream Data Mining- Big Velocity Data',' Link and Graph Mining',' Semantic-based Data Mining and Data Pre-processing',' Mobility and Big Data',' Intrusion Detection for Gigabit Networks',' Anomaly and APT Detection in Very Large Scale Systems',' High Performance Cryptography',' Visualizing Large Scale Security Data',' Threat Detection using Big Data Analytics',' Privacy Threats of Big Data',' Privacy Preserving Big Data Collection/Analytics',' HCI Challenges for Big Data Security & Privacy',' User Studies for any of the above',' Sociological Aspects of Big Data Privacy',' Complex Big Data Applications in Science, Engineering, Medicine, Healthcare, Finance,Business, Law, Education',' Transportation, Retailing, Telecommunication',' Big Data Analytics in Small Business Enterprises (SMEs)',' Big Data Analytics in Government, Public Sector and Society in General',' Real-life Case Studies of Value Creation through Big Data Analytics',' Big Data as a Service',' Big Data Industry Standards',' Experiences with Big Data Project Deployments'];
});

MyApp.controller('ViewPaperCtrl', function($scope){
    $scope.papers = [
        {
            conference_name :'Conference 1',
            paper_id: '#paper1',
            paper_id_2: 'paper1',
            paper_title : 'A Survey of Clustering Algorithms for Big Data: Taxonomy and Empirical Analysis',
            author_1: 'Author 1',
            author_2: 'Author 2',
            author_3: 'Author 3',
            paper_hyperlink: '',
            submission_time: 'HH:mm DD-MM-YYYY',
            forward_status: 'Forwareded',
            forward_time: 'HH:mm DD-MM-YYYY',
            acceptance_status: 'Decision Pending'
        },
        {
            conference_name :'Conference 2',
            paper_id: '#paper2',
            paper_id_2: 'paper2',
            paper_title : 'Enabling Efficient Multi-Keyword Ranked Search Over Encrypted Mobile Cloud Data Through Blind Storage',
            author_1: 'Author 1',
            author_2: 'Author 2',
            author_3: 'Author 3',
            paper_hyperlink: '',
            submission_time: 'HH:mm DD-MM-YYYY',
            forward_status: 'Not Forwareded',
            forward_time: 'N/A',
            acceptance_status: 'N/A'

        },
        {
            conference_name :'Conference 3',
            paper_id: '#paper3',
            paper_id_2: 'paper3',
            paper_title : 'Enabling Efficient Multi-Keyword Ranked Search Over Encrypted Mobile Cloud Data Through Blind Storage',
            author_1: 'Author 1',
            author_2: 'Author 2',
            author_3: 'Author 3',
            paper_hyperlink: '',
            submission_time: 'HH:mm DD-MM-YYYY',
            forward_status: 'Forwareded',
            forward_time: 'HH:mm DD-MM-YYYY',
            acceptance_status: 'Accepted'

        },
        {
            conference_name :'Conference 4',
            paper_id: '#paper4',
            paper_id_2: 'paper4',
            paper_title : 'Enabling Efficient Multi-Keyword Ranked Search Over Encrypted Mobile Cloud Data Through Blind Storage',
            author_1: 'Author 1',
            author_2: 'Author 2',
            author_3: 'Author 3',
            paper_hyperlink: '',
            submission_time: 'HH:mm DD-MM-YYYY',
            forward_status: 'Forwareded',
            forward_time: 'HH:mm DD-MM-YYYY',
            acceptance_status: 'Rejected'

        },
        {
            conference_name :'Conference 5',
            paper_id: '#paper5',
            paper_id_2: 'paper5',
            paper_title : 'Enabling Efficient Multi-Keyword Ranked Search Over Encrypted Mobile Cloud Data Through Blind Storage',
            author_1: 'Author 1',
            author_2: 'Author 2',
            author_3: 'Author 3',
            paper_hyperlink: '',
            submission_time: 'HH:mm DD-MM-YYYY',
            forward_status: 'Forwareded',
            forward_time: 'HH:mm DD-MM-YYYY',
            acceptance_status: 'Decision Pending'

        }
        
    ];
});

MyApp.controller('ProfileTimelineCtrl', function($scope){
    $scope.events = [
        {
            detail: 'Paper Submitted',
            timestamp: 'HH:mm DD-MM-YYYY'
        },
        {
            detail: 'Paper retracted',
            timestamp: 'HH:mm DD-MM-YYYY'
        },
        {
            detail: 'Changed Profile Picture Changed',
            timestamp: 'HH:mm DD-MM-YYYY'
        },
        {
            detail: 'Updated Password',
            timestamp: 'HH:mm DD-MM-YYYY'
        },
        {
            detail: 'Paper retracted',
            timestamp: 'HH:mm DD-MM-YYYY'
        },
        {
            detail: 'Updated Designation',
            timestamp: 'HH:mm DD-MM-YYYY'
        },
    ];
});


MyApp.config(function($routeProvider){
    $routeProvider
    .when('/upload',{
        templateUrl: 'templates/upload_paper.html'
        
    })
    .when('/',{
        templateUrl: 'templates/dashboard.html',
        controller: 'TabsDemoCtrl'
    })
    .when('/profile',{
        templateUrl: 'templates/profile.html',
        controller: 'ProfileCtrl'
    })
    .when('/profile/files',{
        templateUrl: 'templates/profile_files.html',
        controller: 'FileViewCtrl'
        
    })
    
    .when('/profile/edit',{
        templateUrl: 'templates/profile_edit.html'
    })
    
    .when('/profile/forum',{
        templateUrl: 'templates/profile_forum.html'
    })
    
    .when('/profile/timeline',{
        templateUrl: 'templates/profile_timeline.html',
        controller: 'ProfileTimelineCtrl'
    })
    .when('/view_papers',{
        templateUrl: 'templates/view_paper.html',
        controller: 'ViewPaperCtrl'
    })
    .when('/view_paper_list_view',{
        templateUrl: 'templates/view_paper_list.html',
        controller: 'ViewPaperCtrl'
    })
    .when('/Messages', {
        templateUrl: 'templates/messages.html'
    })
    .when('/Settings',{
        templateUrl: 'templates/User_settings.html'
    })
    .when('/help',{
        templateUrl : 'templates/help.html'
    })
    .when('/Services',{
        templateUrl: 'templates/services.html'
    })
    .when('/Contact_Us',{
        templateUrl: 'templates/contact_us.html'
    })
    .when('/About_Us',{
        templateUrl: 'templates/about_us.html'
    })
    .when('/FAQs',{
        templateUrl : 'templates/faqs.html'
    })
    .otherwise({
        template: '<div>Under Ctrn</div>'
    })
    

});