# AWS DevOps CI/CD Pipeline Project  

This project demonstrates a fully automated CI/CD pipeline using AWS native services, including:  
- **AWS CodeCommit** – Version control for the application source code  
- **AWS CodeBuild** – Builds and packages the application  
- **AWS CodeDeploy** – Deploys the application to AWS Elastic Beanstalk  
- **AWS Elastic Beanstalk** – Hosts the web application  
- **AWS RDS (MySQL/PostgreSQL)** – Database for the web application  

## **Project Overview**  
This setup ensures that every push to the GitHub repository triggers an automated build, test, and deployment process using AWS services. The goal is to demonstrate a professional DevOps pipeline in a real-world scenario.  

## **Architecture**  
![image](https://github.com/user-attachments/assets/ff3b8e3a-c2b0-4d6e-9052-f979b6dd7aa4)
  

## **Technologies Used**  
- AWS CodeCommit, CodeBuild, CodeDeploy, Elastic Beanstalk  
- GitHub (as the source repository)  
- RDS (MySQL/PostgreSQL) for database  
- Python/Flask (or PHP) for a simple web application  
- Terraform (optional for IaC)  

## **Setup Instructions**  
- Clone the repository and switch to the `cicd-pipeline-aws` branch:  
  ```bash
  git clone https://github.com/your-username/aws-devops-projects.git
  cd aws-devops-projects
  git checkout -b cicd-pipeline-aws
