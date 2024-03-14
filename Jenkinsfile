pipeline {
    agent any

    stages {
        
        
        stage('Build Docker Image') {
            steps {
                // Build Docker image
                script {
                    sh " docker build -t salman14/php_project:1.3 ."
                    sh " docker push salman14/php_project:1.3 "
                }
            }
        }
        
        stage('Deploy to EC2') {
            steps {
                // Example: deploy Docker image to EC2 instance
                script {
                    def docker= " docker pull salman14/php_project:1.3 "
                    // Example: SSH to EC2 instance and deploy Docker container
                    sshagent(['ec2-docker-deploy']) {
                        sh " ssh -o StrictHostKeyChecking=no ec2-user@your-ec2-instance "
                    }
                }
            }
        }
    }
}
