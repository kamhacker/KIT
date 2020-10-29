pipeline {
    agent any
    stages {
        stage("Checkout") {
            steps {
                println '+++  stage: Checkout ++++'
                checkout scm
                script {
                    env.GIT_COMMIT = sh (script: "git log -n 1 --pretty=format:'%h'", returnStdout: true)
                }
                sh 'chmod -R 777 .'
                echo "+++ ending job"
            }
        }

        stage ("Build docker image") {
            when {
                branch 'master'
            }
            steps {
                println "+++  stage: Build docker image ++++"
                sh "docker-compose -f docker-compose.yml up --build -d"
                echo "+++ ending job"
            }
        }

        stage ("phpunit tests") {
            steps {
                println "+++ stage: phpunit tests ++++"
                sh "./vendor/bin/simple-phpunit tests/AppTest.php"
                sh "./vendor/bin/simple-phpunit tests/Entity/TaskTest.php"
                sh "./vendor/bin/simple-phpunit tests/Repository/TaskRepositoryTest.php"
                sh "./vendor/bin/simple-phpunit tests/Utils/NumberOfImportantTasksTest.php"
                sleep time: 5
                // sh "./vendor/bin/simple-phpunit tests/Api/ApiTest.php"
                echo "+++ ending job"
            }
        }

        stage ("Deploy App") {
            steps {
                println "+++ Deploy App ++++"
                echo "Deploying for a long time..."
                echo "+++ ending job"

            }
        }
    }
}
