<?php
/*
 * Copyright (c) 2015 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of PHPMentorsWorkflowerBundle.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\WorkflowerBundle\Persistence;

use PHPMentors\Workflower\Workflow\Workflow;

class PhpWorkflowSerializer implements WorkflowSerializerInterface
{
    /**
     * {@inheritDoc}
     */
    public function serialize(Workflow $workflow)
    {
        return serialize($workflow);
    }

    /**
     * {@inheritDoc}
     */
    public function deserialize($workflow)
    {
        return unserialize($workflow);
    }
}
