<?php

namespace App\Controller;

use App\Model\TodoModel;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoController extends AbstractController
{
    /**
     * Liste des tâches
     *
     * @Route("/todos", name="todo_list", methods={"GET"})
     */
    public function todoList()
    {
        $todos = TodoModel::findAll();

        return $this->render('todo/list.html.twig', [
            'todos' => $todos,
        ]);
    }

    /**
     * Affichage d'une tâche
     *
     * @Route("/todo/{id}", name="todo_show", requirements={"id" = "\d+"}, methods={"GET"})
     */
    public function todoShow($id)
    {
        $todo = TodoModel::find($id);

        return $this->render('todo/single.html.twig', [
            'todo' => $todo
        ]);
    }

    /**
     * Changement de statut
     *
     * @Route("/todo/{id}/{status}", name="todo_set_status", requirements={"id" = "\d+"}, methods={"GET"})
     * 
     */
    public function todoSetStatus($id, $status)
    {

    }

    /**
     * Ajout d'une tâche
     *
     * @Route("/todo/add", name="todo_add", methods={"POST"})
     *
     */
    public function todoAdd()
    {

    }
}