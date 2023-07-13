# e-SysHealth
A Fullstack Project as Project Assign during DRDO Internship


SUMMER TRAINING REPORT ON **WEB DEVELOPMENT**

at

![](original/Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.001.png)

**COMPUTER SERVICES GROUP**

**DEFENCE MATERIALS AND STORES RESEARCH AND DEVELOPMENT ESTABLISHMENT (DMSRDE) KANPUR**-208013

**A Report Submitted**

**In Partial Fulfilment of the Requirements for the Degree of**

BACHELOR OF TECHNOLOGY

in

COMPUTER SCIENCE AND ENGINEERING

**SRM INSTITUTE OF SCIENCE AND TECHNOLOGY KATTANKULATHUR, CHENNAI**

Submitted by: **PARTHIV SEN RA2011031010035**

Under the guidance of

**MR. AMIT KUMAR & MR. SUDHANSHU AGRAHARI**

**CERTIFICATE**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.002.png)

This is to certify that **Parthiv Sen**, a student of B.Tech. in Computer Science and Engineering from SRM Institute of Science and Technology, Kattankulathur has successfully completed his Summer Training on **“Web Development”** under my supervision at **Defence Materials and Stores Research and Development Establishment (DMSRDE) DRDO**, **Kanpur,** during period of 4 weeks i.e., 19th June 2023 to 16th July 2023.

During this tenure, we found him to be sincere and hardworking, we take this opportunity to wish him all the very best in the future endeavours.

**AMIT KUMAR**

**SCIENTIST ‘E’**

**GROUP HEAD**

**COMPUTER SEVICES GROUP DMSRDE, DRDO**

**KANPUR, INDIA**

**ACKNOWLEDGEMENT**

I record my sincere thanks to the Director **Dr. Mayank Dwivedi**, Scientist 'G', Defence Materials and Stores Research and Development Establishment, Defence Research and Development Organisation for providing me an excellent opportunity to undergo training in his esteemed organisation through which I could gain an exposure to the Research and Development environment.

I would like to express my sincere gratitude to **Mr. Sudhanshu Agrahari**, who supervised my internship work during these months. I would like to thank him for closely monitoring my progress and showing me the right direction yet providing me independence that enabled me to develop deep knowledge of my internship field.

I would also like to thank **Mr. Amit Kumar,** Scientist ‘E’**,** for guiding me throughout my work and helping me in understanding the concepts and making me familiar with devices and their applications.

Last but not the least , I would like to thank the library staff for allowing me to access the library and it’s valuable material.

**PARTHIV SEN**

**REG NO.: RA2011031010035**

**ABSTRACT**

This report presents a comprehensive analysis of form modules used in web development, focusing on the integration and utilization of PHP, HTML, JavaScript, CSS, Bootstrap, Python and MongoDB. The report provides an in-depth understanding of each technology and its role in creating interactive and user-friendly web forms. It explores the process of designing and implementing forms using HTML for structure, CSS for styling, and JavaScript for interactivity, PHP for client-side validation and Python for Backend Management. Additionally, it delves into the server-side processing of form data using PHP, including data storage and retrieval with MongoDB databases. The report also examines the benefits of incorporating Bootstrap framework for responsive and mobile-friendly form designs.The utilization of MongoDB, a powerful NoSQL Database system, is also examined, highlighting its role in securely storing and managing form data. Furthermore, it discusses best practices and common challenges in form development and offers practical solutions. The focus remains on creating forms that are user-friendly, intuitive, and capable of capturing accurate data.

**INTRODUCTION OF WEB DEVELOPMENT**

Web development refers to the process of creating, building, and maintaining websites and web applications. It involves a combination of programming, designing, and managing the technical aspects of a website. Web development encompasses various tasks such as coding, server-side scripting, client-side scripting, database management, content creation, and web server configuration.

Web development can be categorized into two main components: front-end development and back-end development.

**Front End Development:**

A front-end developer is a type of software developer who specializes in creating and designing the user interface and user experience of websites and web applications. The primary responsibility of a front-end developer is to ensure that the visual and interactive aspects of a website or application are user-friendly, aesthetically pleasing, and functionally efficient.

Front-end developers work with various technologies, tools, and languages, including:

1. HTML (HyperText Markup Language): The standard markup language used to create the structure and layout of web pages.
1. CSS (Cascading Style Sheets): A stylesheet language used to control the presentation, formatting, and appearance of web pages, such as colors, fonts, and layout.
1. JavaScript: A programming language that allows developers to add interactivity, animations, and other dynamic elements to websites and web applications.

Front-end developers may also use libraries and frameworks, such as React, Angular, or Vue.js, to streamline their work and create more sophisticated and interactive UIs. Additionally, they often collaborate with back-end developers, who are responsible for the server-side logic and data management, to ensure seamless integration between the front- end and back-end components of a web application or website.

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.003.png)

**BackEnd Development:**

Backend Development is also known as server-side development. It is everything that the users don’t see and contains behind-the-scenes activities that occur when performing any action on a website. It focuses primarily on databases, backend logic, APIs, and Servers.

Back-end development deals with the server-side of web applications. It involves managing the logic, databases, and server operations that power the website. Back-end developers work with programming languages such as PHP, Python, Ruby, or Java to handle data processing, server communication, and database management.

The backend of a website is a combination of servers, applications, and databases. Code written by backend developers helps browsers in communicating with the databases and store data into the database, read data from the database, update the data and delete the data or information from the database.\*\*

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.004.png)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.005.jpeg)

**HTML FOR FORM STRUCTURE**

**FORM ELEMENTS**

` `The various form elements provided by HTML. Forms allow users to input data and submit it to a server for processing. We will learn about essential form elements such as <form>, <input>, ![ref1]![ref1]![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.007.png)![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.008.png)<textarea>, <select>, and <button>. The <form> element serves as the container for all form elements and defines the boundaries of the form. Within the <form> element, we can include various input ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.009.png)![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.010.png)![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.011.png)![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.012.png)![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.013.png) fields, text areas, select dropdowns, checkboxes, radio buttons, and buttons.These elements provide the foundation for creating interactive and user-friendly web forms.

**INPUT TYPES AND ATTRIBUTES**

The different input types and attributes available in HTML forms. Common input types such as text, password, email, number, date, checkbox, radio buttons, and more. Additionally, attributes like required, placeholder, disabled, and pattern, which enable us to customize and control the behavior of form inputs.

- Text: Allows users to enter text.
- Password: Masks the input to hide sensitive information.
- Email: Ensures that the input follows a valid email format.
- Number: Accepts numeric values only.
- Date: Provides a date picker for selecting dates.
- Checkbox: Allows users to select multiple options.
- Radio Buttons: Allows users to select only one option from a group.
- File: Enables users to upload files.

` `**FORM VALIDATION**

Form validation is an essential aspect of web development to ensure that the data submitted through forms is accurate and meets specific criteria. In this section, the concept of form validation and different validation techniques. Both client-side validation using JavaScript and server-side validation using technologies like PHP. To validate input fields for required data, proper format (e.g., email validation), length constraints, and custom validation rules.

Form validation plays a crucial role in enhancing the user experience by providing immediate feedback on erroneous or incomplete form submissions. By implementing effective form validation techniques, we can improve data quality, reduce errors, and enhance the overall functionality of web forms.

**CSS FOR VISUAL STYLING**

**SELECTORS AND STYLES**

` `CSS (Cascading Style Sheets) is a powerful language used to style and format the visual appearance of HTML elements. Selectors allow us to target specific HTML elements and apply styles to them. In this section, different types of selectors, such as element selectors, class selectors, ID selectors, and attribute selectors. Delve into the various CSS properties that can be used to modify the appearance of elements, including color, background, font, margin,

padding, and more. More advanced styling techniques using CSS. This includes using CSS pseudo-classes like :hover, :active, :visited, and :focus to create interactive and dynamic effects. We discuss the box model and how it affects the sizing and spacing of elements.

**RESPONSIVE DESIGN**

Responsive design is an essential aspect of modern web development, ensuring that websites adapt and display properly on different devices and screen sizes. In this section, we discuss responsive design principles and techniques using CSS. Media queries, which allow us to apply different styles based on the device's screen size, orientation, and other characteristics. Responsive units, such as percentages and viewport-relative lengths, to create fluid and flexible layouts that adjust dynamically.

These units allow developers to create flexible and scalable layouts that adapt to different screen sizes. We discuss responsive typography and how to ensure optimal readability and legibility on various devices.

**CUSTOMIZING FORM APPEARANCE**

CSS provides extensive customization options to style form elements, allowing us to enhance the visual appeal and user experience of web forms. In this section, Delve into techniques for customizing the appearance of form elements using CSS. Styling input fields, checkboxes, radio buttons, select dropdowns, and buttons.

` `Properties like border, background, padding, margin, and font to create visually appealing and consistent form designs. Additionally, Pseudo-classes and pseudo-elements that can be used to target specific states of form elements, such as :hover, :focus, and ::placeholder.

By understanding CSS selectors, styles, responsive design principles, and form customization techniques, developers can create visually engaging and user-friendly web interfaces that align with their design requirements. CSS empowers developers to transform the look and feel of HTML elements, ensuring a cohesive and aesthetically pleasing user experience.

**JAVASCRIPT FOR INTERACTIVITY**

` `**EVENT HANDLING**

The concept of event handling in JavaScript. Events are actions or occurrences that happen in the browser, such as clicking a button, hovering over an element, or submitting a form. How to use JavaScript to listen for these events and respond to them by executing specific code or functions. Event listeners, event handlers, and event objects to handle different types of events effectively.

` `**FORM VALIDATION WITH JAVASCRIPT**

Form validation is crucial for ensuring the accuracy and integrity of user-submitted data. delve into the process of form validation using JavaScript. Various techniques for validating form inputs, such as checking for empty fields, validating email addresses, verifying password strength, and more. JavaScript functions and conditional statements to perform validation checks and provide feedback to users in real-time.

` `**ENHANCING USER EXPERIENCE**

Providing a seamless and engaging user experience is essential for any web application. In this section, we explore JavaScript techniques for enhancing the user experience. Dynamic content manipulation, including updating the DOM (Document Object Model) on the fly to display new data or respond to user actions.

Techniques for creating interactive elements, such as sliders, tabs, accordions, and tooltips, to improve usability and interactivity.

Additionally, asynchronous JavaScript and AJAX (Asynchronous JavaScript and XML) to retrieve data from servers without refreshing the entire web page. This allows for smooth and responsive user interactions, such as loading data dynamically or submitting form data asynchronously. JavaScript libraries and frameworks that provide pre-built components and functionality to enhance user experience, such as jQuery, React, or Vue.js.

By mastering event handling, form validation, and enhancing the user experience with JavaScript, developers can create dynamic and interactive web applications.

These skills enable developers to create responsive interfaces, validate user input, and provide a delightful user experience, ultimately improving user satisfaction and engagement.

**PHP FOR CLIENT-SIDE PROCESSING**

**SETTING UP PHP ENVIRONMENT**

The necessary steps to set up a PHP environment for server-side processing. The installation of PHP on different platforms, such as Windows, macOS, and Linux. Additionally, how to configure the PHP settings, including variables, error handling, and server integration. The use of PHP extensions and libraries to extend the functionality of PHP.

` `**HANDLING FORM SUBMISSIONS**

When users submit forms on a website, it's essential to process and handle the submitted data securely and efficiently. Dive into handling form submissions using PHP. Techniques for retrieving form data, such as using the $\_POST and $\_GET superglobals. How to sanitize and validate user input to prevent security vulnerabilities and data inconsistencies. Furthermore, how to store form data in databases or send it via email.

` `**FORM DATA SECURITY**

Form Data Security Security is a critical aspect of handling form data in PHP. In this section, focus on ensuring the security of form data throughout the processing phase. Techniques for preventing common security threats, such as cross-site scripting (XSS) attacks, NoSQL injection, and cross-site request forgery (CSRF).

` `The use of PHP security functions and best practices, such as input validation, output encoding, and prepared statements, to safeguard form data.

Additionally, authentication and authorization techniques to ensure that only authorized users can access and process form data. user authentication methods, such as username/password validation and session management. authorization mechanisms, including role-based access control (RBAC) and permission systems.

By understanding how to set up a PHP environment, handle form submissions, and ensure form data security, developers can effectively process user input on the server-side.

These skills enable developers to build robust and secure web applications that handle user data safely, preventing security breaches and maintaining data integrity.

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.014.png) ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.015.png)

**BOOTSTRAP FOR RESPONSIVE FORMS**

` `**INTRODUCTION TO BOOTSTRAP FRAMEWORK**

` `Provide an introduction to the Bootstrap framework and its significance in web development. We explain the core concepts of Bootstrap, such as its responsive grid system and pre-designed CSS components. The advantages of using Bootstrap for creating responsive forms, including its ease of use, cross-browser compatibility, and mobile-friendly design.

` `**BOOTSTRAP FORM COMPONENTS**

` `Bootstrap offers a wide range of form components that can be easily integrated into web applications. In this section, the various form elements provided by Bootstrap, such as text inputs, checkboxes, radio buttons, dropdowns, and more. How to use these components and customize their appearance and behavior using Bootstrap classes and attributes. Advanced form components like date pickers, file inputs, and input groups.

` `**CREATING RESPONSIVE FORM LAYOUTS**

` `Responsive design is a crucial aspect of modern web development, ensuring that forms adapt to different screen sizes and devices. Delve into creating responsive form layouts using Bootstrap. How to utilize Bootstrap's grid system to create responsive form structures that adjust dynamically based on the screen size.

Techniques for arranging form elements in columns, aligning labels and inputs, and handling form responsiveness across different devices.

Furthermore, responsive form validation and error handling using Bootstrap classes. We explore how to display validation messages and feedback to users in a responsive manner, ensuring a seamless user experience across devices.

By leveraging the power of Bootstrap, developers can create visually appealing and responsive forms that enhance user interaction and engagement. The framework's extensive collection of form components and built-in responsiveness features simplify the form development process, allowing developers to focus on delivering a seamless user experience.

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.016.png)

**PYTHON FOR SERVER SIDE MANAGEMENT**

**INTRODUCTION TO PYTHON**

Python is a[ high-level,](https://en.wikipedia.org/wiki/High-level_programming_language)[ general-purpose programming language.](https://en.wikipedia.org/wiki/General-purpose_programming_language) Its design philosophy emphasizes[ code readability ](https://en.wikipedia.org/wiki/Code_readability)with the use of significant indentation via the[ off-side rule.](https://en.wikipedia.org/wiki/Off-side_rule) Python is[ dynamically typed ](https://en.wikipedia.org/wiki/Type_system#DYNAMIC)and[ garbage-collected.](<https://en.wikipedia.org/wiki/Garbage_collection_(computer_science)>) It supports multiple[ programming paradigms,](https://en.wikipedia.org/wiki/Programming_paradigm) including[ structured ](https://en.wikipedia.org/wiki/Structured_programming)(particularly[ procedural)](https://en.wikipedia.org/wiki/Procedural_programming),[ object-oriented ](https://en.wikipedia.org/wiki/Object-oriented_programming)and[ functional programming.](https://en.wikipedia.org/wiki/Functional_programming) It is often described as a "batteries included" language due to its comprehensive[ standard library.](https://en.wikipedia.org/wiki/Standard_library) [Guido van Rossum ](https://en.wikipedia.org/wiki/Guido_van_Rossum)began working on Python in the late 1980s as a successor to the[ ABC programming language ](<https://en.wikipedia.org/wiki/ABC_(programming_language)>)and first released it in 1991 as Python 0.9.0. Python 2.0 was released in 2000. Python 3.0, released in 2008, was a major revision not completely[ backward- compatible ](https://en.wikipedia.org/wiki/Backward_compatibility)with earlier versions. Python 2.7.18, released in 2020, was the last release of Python 2. Python consistently ranks as one of the most popular programming languages. Python users are colloquially called[ pythonistas.](https://en.wikipedia.org/wiki/Pythonistas)

**MONGODB PYTHON CONNECTION**

MongoDB is a document based database with a dynamic data schema. The JavaScript Object Notation (JSON) that it supports is a natural fit for working with objects in modern programming languages like JavaScript, Python and others. This provides an alternative to more traditional Relational Database Management Systems (RDBMS) such as SQL. MongoDB is an example of a NoSQL databases. These databases often use collections of documents instead of the tables used in RDBMS. These databases support dynamic database schemas making them responsive to changes in the structure of data.

This short primer gives some examples of using MongoDB with Python using the pymongo** library. This concludes by introducing mongoengine** for working with Mongo databases in modern software projects as well as how to convert them into dataframe objects for further analysis. It is assumed that readers are comfortable downloading and setting up MongoDB and have some basic experience of using Python.

**PYMONGO**

PyMongo is a Python distribution containing tools for working with[ MongoDB,](http://www.mongodb.org/) and is the recommended way to work with MongoDB from Python. This documentation attempts to explain everything you need to know to use PyMongo.

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.017.png)

**MONGODB FOR DATA MANAGEMENT**

` `**INTRODUCTION TO MONGODB DATABASE**

In this section, provide an introduction to MongoDB, one of the most popular NoSQL used for web development. The importance of databases in storing and managing data for web applications. The features and benefits of MongoDB, including its scalability, reliability, and wide community support. Additionally, we cover the basics of NoSQL (Structured Query Language) and its role in interacting with the MongoDB database.

` `**CREATING DATABASE AND TABLES**

Creating a database and defining the necessary tables are essential steps in setting up a MongoDB database for storing form data. how to create a database and tables using NoSQL statements. The design considerations for creating tables that correspond to the form structure, including defining appropriate data types, primary keys, and relationships between tables. best practices for optimizing database performance and ensuring data integrity.

**STORING AND RETRIEVING FORM DATA**

Once the database and tables are set up, the next step is to store and retrieve form data in the MongoDB database. The process of capturing form submissions and inserting the data into the corresponding database tables. Various techniques for handling form data, such as using PHP to process the form submissions and executing NoSQL queries to insert the data into the database.

Furthermore, methods for retrieving and displaying form data from the database. NoSQL queries for fetching specific data based on criteria and sorting the results.Techniques for presenting the retrieved data in a structured and meaningful way on web pages.

Data management is a critical aspect of web development, and MongoDB offers a reliable and efficient solution for storing and retrieving form data. By understanding the fundamentals of MongoDB and mastering the techniques for database creation, table design, and data manipulation, developers can effectively manage and leverage form data in their web applications.

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.018.png)

**USE CASE DIAGRAM ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.019.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.020.jpeg)

**OBJECT DIAGRAM ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.021.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.022.jpeg)

**WORKFLOW DIAGRAM ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.023.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.024.jpeg)

**PROJECT**

1. **Database Structure ![ref2]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.026.jpeg)

**Details Collection: ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.027.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.028.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.029.png)

**Rank Collection: ![ref2]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.030.jpeg)

**Division Collection:**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.031.png)

**Building Collection: ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.032.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.033.jpeg)

**User Collection: ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.034.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.035.jpeg)

2. **Connection.php**

**SIGNUP.php ![ref3]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.037.jpeg)

**CONNECTOR-RANK.php ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.038.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.039.jpeg)

**CONNECTOR-DIVISION.php ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.040.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.041.jpeg)

**CONNECTOR-BUILDING.php ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.042.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.043.jpeg)

**CONNECTOR.php**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.044.png)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.045.png)

3. **Sign-Up.php ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.046.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.047.jpeg)

**4.Login.php ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.048.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.049.jpeg)

**Form.php: ![ref4]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.051.jpeg)

**Code:- ![ref5]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.053.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.054.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.055.jpeg)

**Rank.php:- ![ref4]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.056.jpeg)

**Code:-**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.057.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.058.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.059.jpeg)

**Division.php ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.060.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.061.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.062.png)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.063.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.064.jpeg)

**Building.php ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.065.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.066.jpeg)

**Code:-**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.067.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.068.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.069.jpeg)

**Query.php ![ref5]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.070.jpeg)

**Code:-**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.071.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.072.jpeg)

**View.php ![ref3]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.073.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.074.png)

**Download.php**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.075.png)

**Update-rank.php ![ref4]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.076.jpeg)

**Code:- ![ref5]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.077.jpeg)

**Update-division.php ![ref4]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.078.jpeg)

**Code:-**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.079.jpeg)

**Update-Building.php ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.080.png)**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.081.jpeg)

**Code:- ![ref5]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.082.jpeg)

**Register.php ![ref4]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.083.jpeg)

**Code:- ![ref5]**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.084.jpeg)

**Login.php**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.085.png)

**Code:-**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.086.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.087.jpeg)

**Javascript:-**

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.088.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.089.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.090.jpeg)

![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.091.jpeg)
42 | P a g e ![](Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.092.png)

[ref1]: Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.006.png
[ref2]: Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.025.png
[ref3]: Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.036.png
[ref4]: Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.050.png
[ref5]: Aspose.Words.59ed19cb-c504-48db-954e-26cd46951af3.052.png
